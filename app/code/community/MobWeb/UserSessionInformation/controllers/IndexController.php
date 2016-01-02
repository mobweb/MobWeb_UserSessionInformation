<?php

class MobWeb_UserSessionInformation_IndexController extends Mage_Core_Controller_Front_Action
{
	public function cartAction() {

		// Get the # of items in the cart
		$count = Mage::helper('checkout/cart')->getSummaryCount();
		$count = $count ? $count : 0;

		// Get the grand total of the cart
		$grandTotal = Mage::helper('checkout/cart')->getQuote()->getGrandTotal();

		// Return the results
		echo json_encode(array(
			'count' => $count,
			'grandTotal' => $grandTotal,
		));
	}

	public function comparisonAction() {

		// Get the # of items on the comparison list
		$count = Mage::helper('catalog/product_compare')->getItemCollection()->getSize();

		// Return the results
		echo json_encode(array(
			'count' => $count
		));
	}
}