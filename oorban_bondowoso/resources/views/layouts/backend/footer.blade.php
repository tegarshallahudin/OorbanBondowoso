<footer class="main-footer">
    <div class="footer-left">
      Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://multinity.com/">Multinity</a>
    </div>
    <div class="footer-right"></div>
  </footer>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
<!-- <script src="../dist/modules/jquery.min.js"></script>   -->
<script src="{{asset('backend/assets/modules/popper.js')}}"></script>
<script src="{{asset('backend/assets/modules/tooltip.js')}}"></script>
<script src="{{asset('backend/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('backend/assets/modules/scroll-up-bar/dist/scroll-up-bar.min.js')}}"></script>
<script src="{{asset('backend/assets/js/sa-functions.js')}}"></script>

<script src="{{asset('backend/assets/modules/chart.min.js')}}"></script>
<script src="{{asset('backend/assets/modules/summernote/summernote-lite.js')}}"></script>

<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
type: 'line',
data: {
  labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
  datasets: [{
    label: 'Statistics',
    data: [460, 458, 330, 502, 430, 610, 488],
    borderWidth: 2,
    backgroundColor: 'rgb(87,75,144)',
    borderColor: 'rgb(87,75,144)',
    borderWidth: 2.5,
    pointBackgroundColor: '#ffffff',
    pointRadius: 4
  }]
},
options: {
  legend: {
    display: false
  },
  scales: {
    yAxes: [{
      ticks: {
        beginAtZero: true,
        stepSize: 150
      }
    }],
    xAxes: [{
      gridLines: {
        display: false
      }
    }]
  },
}
});
</script>
<script src=" {{ asset('backend/assets/js/scripts.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom.js') }}"></script>
<script src=" {{asset('backend/assets/js/demo.js') }} "></script>
</body>
</html>
