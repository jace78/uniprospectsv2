/* Hide form after submit */
document.addEventListener( 'wpcf7mailsent', function( event ) {
  document.querySelectorAll("form.wpcf7-form > :not(.wpcf7-response-output)").forEach(el => {
    el.style.display = 'none';
  });
}, false );