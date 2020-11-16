
// var PurchaseLinks = document.getElementByClassName("LinkToPurchase");
//     var PurchaseLinkPhotos = PurchaseLinks.children;
// var ShoppingWindowPic = document.getElementById("EachPurchaseImage");

// for(var i=0; i<PurchaseLinks.length; i++)
// {
//     PurchaseLinks[i].onclick = function()
//     {
//         alert("Done");
//         //ViewPurchasePicture(PurchaseLinkPhotos[i], ShoppingWindowPic);
//     } 
// }

// function ViewPurchasePicture(Replacer, ReplacedElement)
// {
//     //when making purchse, the product on inner purchase window == one clicked 
//     ReplacedElement = Replacer;
// }

var elements = document.getElementsByTagName("a"); 

function The_Func()
{
    for(var i=0; i<elements.length; i++){
    if (elements[i].className == 'LinkToPurchase') { 
         elements[i].onclick = function(){ 
           alert("yes link clicked!"); 
   }
 } 
}
}
