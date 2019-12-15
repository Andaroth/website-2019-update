var chartSet = false;
$(document).scroll(function(){
  if (chartSet == false) {
    if ($('#chartTrigger').visible(true)) {
      chartSet = true;
      setTimeout(function() {
        // Chart Front End
        new Chart($("#frontendChart"), {
          type: 'pie',
          data: {
            datasets: [{
              data: [
                070, // 'VueJS'
                045, // 'PolymerJS',
                060, // 'React',
                015, // 'Angular',
                100, // 'SCSS/SASS',
                100, // 'Pure HTML5/CSS3',
                025, // 'Symfony',
                025, // 'Laravel',
                050, // 'NodeJS',
                050, // 'Pure PHP'
              ],
              backgroundColor: [
                'rgba(153, 255, 102,.5)', // 'VueJS'
                'rgba(255, 128, 0,.5)',   // 'PolymerJS',
                'rgba(51, 204, 255,.5)',  // 'React',
                'rgba(255, 51, 51,.5)',   // 'Angular',
                'rgba(70, 255, 160,.5)',  // 'SCSS/SASS',
                'rgba(160, 153, 70,.5)',  // 'Pure HTML5/CSS3',
                'rgba(0, 102, 255,.5)',   // 'Symfony',
                'rgba(255, 102, 0,.5)',   // 'Laravel',
                'rgba(0, 153, 0,.5)',     // 'NodeJS',
                'rgba(1503, 0, 153,.5)'   // 'Pure PHP'
              ], //bgcolor
              borderWidth: 0,
            }], // datasets
            labels: [
              'VueJS',
              'PolymerJS',
              'React',
              'Angular',
              'SCSS/SASS',
              'Pure HTML5/CSS3',
              'Symfony',
              'Laravel',
              'NodeJS',
              'Pure PHP'
            ] // labels
          }, // data
          options: {
            legend: {
              position: 'right',
            },
            animation: {
              duration: 2000
            }
          } // options
        }); // chart end
      },500); // interval End
    } // visible end
  } // if chartset end    
}); // scroll end


