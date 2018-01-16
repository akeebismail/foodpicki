<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/16/18
 * Time: 9:41 PM
 */
namespace App\Food\Payment;
use Illuminate\Support\Collection;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Rest\ApiContext;
class PaypalXpress {
    private $apiContext;
    private $payer;
    private $amount;
    private $transactions = [];
    private $itemList;
    private $others;


    public function __construct($clientId, $clientSecret, $mode,$url)
    {
        $apiContext = new ApiContext(
            new OAuthTokenCredential($clientId, $clientSecret));

        $apiContext->setConfig([
            'mode' => $mode,
            'log.LogEnabled' => env('APP_DEBUG'),
            'log.FileName' =>     storage_path('logs/paypal.log'),
            'log.LogLevel'    =>  env('APP_LOG_LEVEL'),
            'cache.enabled' => true,
            'cache.FileName'    => storage_path('logs/paypal.cache'),
            'http.CURLOPT_SSLVERSION'   => CURL_SSLVERSION_TLSv1
        ]);

        $this->apiContext = $apiContext;
    }

    public function getApiContext(){
        return $this->apiContext;
    }

    public function setPayer(){
        $payer = new Payer();

        $payer->setPaymentMethod('paypal');
        $this->payer = $payer;
    }

    public function setItems(Collection $products){
        $items =[];
        foreach ($products as $product) {
            $item = new Item;
            $item->setName($product->name)
                ->setDescription($product->description)
                ->setQuantity($product->qty)
                ->setCurrency('USD')
                ->setPrice($product->price);
            $items[] = $item;
        }
        $itemList = new ItemList;
        $itemList->setItems($items);

        $this->itemList = $itemList;
    }

    public function setOtherFees($subtotal,$tax =0, $ship = 0){
        $details = new Details;
        $details->setTax($tax)
            ->setSubtotal($subtotal);

        $this->others = $details;
    }

    public function setAmount($amt, $currency = 'USD'){
        $amount = new Amount();
        $amount->setCurrency($currency)
            ->setTotal($amt)
            ->setDetails($this->others);

        $this->amount = $amount;
    }

    public function setTransaction(){
        $transaction = new Transaction;
        $transaction->setAmount($this->amount)->setItemList($this->itemList)
            ->setDescription("Payment with paypal")
            ->setInvoiceNumber(uniqid());

        $this->transactions= $transaction;
    }

    public function createPayment ($returnUrl, $cancelUrl){
        $payment = new Payment;
        $payment->setIntent("sale")
            ->setPayer($this->payer)
            ->setTransactions([$this->transactions]);

        $redirects = new RedirectUrls;
        $redirects->setReturnUrl($returnUrl)->setCancelUrl($cancelUrl);

        $payment->setRedirectUrls($redirects);

        try{
            return $payment->create($this->apiContext);
        }catch (PayPalConnectionException $e){
            throw new PayementRequestError($e->getData());
        }
    }

    public function setPayerId($payerId){
        $exec = new PaymentExecution;
        $exec->setPayerId($payerId);

        return $exec;
    }
}