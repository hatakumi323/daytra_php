<?php 
    function calPriceIncludedTax($price) {
        $taxRate = 0.1;
        return $price + $price *$taxRate;
    }

    function displayPrice($price) {
        $priceIncluededTax = calPriceIncludedTax($price);
        return $priceIncluededTax."円";
    }
?>