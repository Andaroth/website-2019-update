<script src="<?= JS ?>chart.js"></script>
   <div id="frontendChart"></div>
    <script type="text/javascript">
      var frontEnd = new Chart(document.getElementById('frontendChart'), {
        type: 'pie',
        data: {
          datasets: [{
            data: [95,80,65]
          }],
          labels: [{
            'HTML','CSS','JS'
          }]
        },
        options: {}
      });
    </script>
