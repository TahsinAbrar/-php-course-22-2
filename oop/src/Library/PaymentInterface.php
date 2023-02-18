<?php

interface PaymentInterface
{
    public function initTransaction();
    public function checkTransactionStatus();
    public function verifyTransaction();
    public function ipn();
}