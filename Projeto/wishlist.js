function addToWishlist(productId) {
    // Get the wishlist data from local storage or cookies
    var wishlist = localStorage.getItem('wishlist');
    if (!wishlist) {
      wishlist = [];
    } else {
      wishlist = JSON.parse(wishlist);
    }
  
    // Check if the product is already in the wishlist
    if (wishlist.indexOf(productId) === -1) {
      // Add the product ID to the wishlist
      wishlist.push(productId);
  
      // Save the updated wishlist data to local storage or cookies
      localStorage.setItem('wishlist', JSON.stringify(wishlist));
    }
  }
  

  var wishlist = localStorage.getItem('wishlist');
if (wishlist) {
  wishlist = JSON.parse(wishlist);
  // Display the wishlist items on the page
} else {
  // Display a message saying the wishlist is empty
}
