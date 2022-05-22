<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Zorb\Onway\Enums\OrderService;
use Zorb\Onway\Enums\Payer;
use Zorb\Onway\Enums\PaymentMethod;
use Zorb\Onway\Facades\Onway;

class CreateOrderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'onway:create_order';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $response = Onway::createOrder()
            ->fromCity('თბილისი')
            ->fromName('test_name')
            ->fromPhone('568150438')
            ->fromAddress('test_address')
            ->fromCompany('supergmiri_test')
            ->toCity('თბილისი')
            ->toName('test_name')
            ->toPhone('568150438')
            ->toAddress('test_address')
            ->services([OrderService::Picturing])
            ->parcel(0)
            ->payment(PaymentMethod::Invoice)
            ->payer(Payer::Customer)
            ->weight(10)
            ->additionalInformation('სატესტო შეკვეთა (დროებითია შემდგომ უნდა წაიშაოლოს)')
            ->orderDetail('test_details')
            ->send();

        dd($response);
    }
}
