# Reporting Security Issues

We welcome reports of possible vulnerabilities or issues as part of our responsible disclosure program. For more information go to
https://support.adyen.com/hc/en-us/articles/115001187330-How-do-I-report-a-possible-security-issue-to-Adyen-

This version of module is vulnerable at BIN attack to Magento 

the steps attacker does:

1) the attacker gets from checkout Adyen Keys needed to step 2)
2) Using Adyen SDK javascript the attacker is able to creates a payment token (for instance: https://docs.adyen.com/online-payments/tokenization/create-and-use-tokens)
3) the attacker uses REST API MAGENTO:
POST V1/guest-carts (new cart)
POST V1/guest-carts/{{cart_token}}/items (add item)
POST V1/guest-carts/{{cart_token}}/shipping-information (set address)
POST V1/guest-carts/{{cart_token}}/retrieve-adyen-payment-methods
POST V1/guest-carts/{{cart_token}}/payment-information (place order with payment token)

RESULT
failure on Adyen  and extra fee from Adyen to Merchant
