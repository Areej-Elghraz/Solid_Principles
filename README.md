# 👉🏻 Solid Principles 👈🏻

# Simple classes written using solid principles 🤏🏻.

# lits explain in details 🤩:

1- 'Order class' => has 'name', 'price' properties and 'get-Name()', 'get-Price()' methods.

2- 'Order Processor' => class has Process order method.

3- 'City Price class' => dependes on 'Order class' as object property and assigned by constructor.

4- 'City Price class' => is extended by 'To Another City Price class' and 'To Same City Price class'.
Thease classes depend on and implements 'Shopping Cost Count interface'.
They must implement 'Total Cost Count() method' in their body.

5- 'Payment Prcessor class' =>  dependes on 'Payment Type interface' as object property and assigned by constructor.
has 'Paymnet Information()' method -> return 'Payment Method()' method from the 'Payment Type interface' object.

6- 'Insta Pay Payment', 'Vodafone Cash Payment' and 'PayPal Payment' classes depend on and implement 'Payment Type interface'.
They must implement 'Payment Method()' method in their body.
