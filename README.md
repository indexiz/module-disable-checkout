## [1.0.0] - 2024-08-02

### Reference
- **Module:** Indexiz_DisableCheckout
- **Feature:** Disable Orders Checkout Process
- **Auther:**  Ali Raza Dahar (Senior Magento 2 Developer)

### Add
- Added `Disable Checkout` functionality so that customers can not place orders.
- Added a CMS page to show Important Message Page to tell customers why they can't place orders.

## Settings in Magento Admin
You have to add a new CMS page to show important message to your customers, with this URL
(https://your-store-base-url.com/important-message)
and then create URL Rewrite to redirect the checkout page to this important-message page.

#### 1. Create CMS Page for Announcement
- In admin menu, go to the **CONTENT > Elements > Pages**
- Then click **Add New Page** to create a new CMS page. Create and fill the page content which you want to show to your 
customers and most important thing is to assign a URL Key (**important-message**) for this page in SEO section.

#### 2. Create URL Rewrite to Disable Checkout
- In admin, you need to create a URL Rewrite which will be used to redirect the checkout page to important-message page
  (CMS page which we created above in previous steps).
- To create URL rewrite, go to the **MARKETING > SEO & Search > URL Rewrites**
- Then click **Add URL Rewrite** to create a URL Rewrite for checkout page. Note you need to fill (**checkout**) in 
  Requested Path and (**important-message**) in Target Path.

#### NOTE
If you are using any payment method (Check out with PayPal) directly on PLP, PDP pages or pages other than checkout then you must Disable that 
payment methods as well so that there should not be any way for customers to place an order in any way. Make Sure you 
have closed all the doors for your customers to not place an order.

## How to Resume Checkout Process Again?
This is very simple. You are back from break and again want to get orders from customers. Now, just need to perform 
these steps,
- Delete URL Rewrite which you created for **checkout**
- Enable Payment Methods again, if you disabled any Payment Method to avoid orders.
- Optionally, you can delete CMS page you created to tell people why you are OFF and not accepting orders.
- Optionally, you may disable this **Indexiz_DisableCheckout** module if no longer needed.

That's it…! Now, everything will be working as before.
