<?php

/**
 * Adyen Payment Module
 *
 * Copyright (c) 2023 Adyen N.V  .
 */

namespace Adyen\Payment\Model\Methods;

use Adyen\Payment\Model\AdyenPaymentMethod;
use Adyen\Payment\Model\Method\PaymentMethodInterface;

class Bijcadeaucard extends AdyenPaymentMethod implements PaymentMethodInterface
{
	public const CODE = 'adyen_bijcadeaucard';
	public const TX_VARIANT = 'bijcadeaucard';
	public const NAME = 'Bijenkorf Giftcard';

	public function supportsRecurring(): bool
	{
		return false;
	}


	public function supportsManualCapture(): bool
	{
		return false;
	}


	public function supportsAutoCapture(): bool
	{
		return false;
	}


	public function supportsCardOnFile(): bool
	{
		return false;
	}


	public function supportsSubscription(): bool
	{
		return false;
	}


	public function supportsUnscheduledCardOnFile(): bool
	{
		return false;
	}


	public function isWallet(): bool
	{
		return false;
	}
}
