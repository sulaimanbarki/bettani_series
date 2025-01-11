<!-- cookie-modal.blade.php -->

<div id="cookie-modal" class="cookie-modal">
   <p>This website uses cookies to ensure you get the best experience on our website.</p>
   <div class="cookie-buttons">
       <button id="accept-cookies" class="btn btn-success btn-sm">Accept</button>
       <button id="reject-cookies" class="btn btn-danger btn-sm">Reject</button>
   </div>
</div>

<style>
   /* Add your CSS styles for the cookie modal */
   .cookie-modal {
       position: fixed;
       bottom: 0;
       left: 0;
       width: 100%;
       background: #f0f0f0;
       padding: 10px;
       text-align: center;
       display: none; /* Hide the modal by default */
   }

   .cookie-buttons {
       margin-top: 10px;
   }
</style>

<script>
   document.addEventListener('DOMContentLoaded', function () {
       var cookieModal = document.getElementById('cookie-modal');
       var acceptButton = document.getElementById('accept-cookies');
       var rejectButton = document.getElementById('reject-cookies');

       // Check if the "cookiesAccepted" cookie exists
       if (document.cookie.indexOf('cookiesAccepted=true') === -1) {
           // Show the cookie modal if the cookie doesn't exist
           cookieModal.style.display = 'block';
       }

       acceptButton.addEventListener('click', function () {
           // Set the "cookiesAccepted" cookie with an expiration of 365 days
           document.cookie = 'cookiesAccepted=true; expires=' + new Date(Date.now() + 365 * 24 * 60 * 60 * 1000).toUTCString();
           // Hide the cookie modal
           cookieModal.style.display = 'none';
       });

       rejectButton.addEventListener('click', function () {
           // You can add custom behavior for rejecting cookies if needed
           // For example, redirecting to a page without certain tracking scripts
           alert('Cookies rejected. You may be redirected to a cookie-free experience.');
           // Hide the cookie modal
           cookieModal.style.display = 'none';
       });
   });
</script>
