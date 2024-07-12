<?php

//give interface or abstract class to connector
//bunda connectorga yani shipment classidagi __construct methodiga Sendable interfaceini qoyib qoyamiz, SendTelegram va hklar emas.
interface Sendable
{
    public function send();
}

class SendTelegram implements Sendable
{
    public function send(): string
    {
        return "send sms to Telegram";
    }
}

class SendEmail implements Sendable
{
    public function send()
      {
        return "send email to Email";
    }
}

class Shipment
{
    public function __construct(public Sendable $sendable){}
    public function ship()
    {
        return $this->sendable->send();
    }
}

//run time
$shipment = new Shipment(new SendTelegram());
echo $shipment->ship();



