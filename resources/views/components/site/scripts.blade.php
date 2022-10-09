{{--  custom scripts  --}}
<script type="text/javascript" src="/js/site/custom.js"></script>
<noscript>Your browser is outdated or does not support JavaScript</noscript>

<script>
  // const status = localStorage.getItem('config@grey')
  // var getPX = localStorage.getItem('config@px')

  // const target = document.querySelector('html')
  // const selector = document.getElementById('grey')

  // if (!getPX) {
  //   getPX = '10px'
  // }

  // if (status == 'true') {
  //   target.classList.add('greyscale')
  // } else {
  //   target.classList.remove('greyscale')
  // }

  // target.style.fontSize = getPX

  $(document).ready(()=>{
    $('#language button span').html($('#language a.selected').html())
    $('#language a').click(function() {
      $('#language button span').html($(this).html())
      ('#language a').removeClass('selected');
      $(this).addClass('selected');
    })
  });

</script>

{{--  page scripts  --}}

@yield('scripts')
