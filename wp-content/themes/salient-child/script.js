/* Hide form after submit */
document.addEventListener( 'wpcf7mailsent', function( event ) {
  console.log('hello wpcf7mailsent');
  document.querySelectorAll("form.wpcf7-form > :not(.wpcf7-response-output)").forEach(el => {
    console.log(el);
    el.style.display = 'none';
  });
}, false );