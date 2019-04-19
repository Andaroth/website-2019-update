var chartSet = false;
$(document).scroll(function(){
  if (chartSet == false) {
    if ($('#chartTrigger').visible(true)) {
      chartSet = true;
      setTimeout(function() {
        // Chart Front End
        new Chart($("#frontendChart"), {
          type: 'doughnut',
          data: {
            datasets: [{
              label: '% of knowledge in FrontEnd',
              data: [15,10,10,30,35],
              backgroundColor: [
                'rgba(153, 102, 255,.5)',
                'rgba(51, 204, 255,.5)',
                'rgba(255, 102, 0,.5)',
                'rgba(255, 0, 102,.5)',
                'rgba(0, 153, 51,.5)'
              ], //bgcolor
              borderWidth: 3,
              borderColor: '#2e3133'
            }], // datasets
            labels: [
              'Polymer',
              'React',
              'Angular',
              'SCSS/SASS',
              'Pure HTML5/CSS3'
            ] // labels
          }, // data
          options: {
            animation: {
              duration: 2000
            }
          } // options
        }); // chart end
        // Chart Back End
        new Chart($("#backendChart"), {
          type: 'doughnut',
          data: {
            datasets: [{
              label: '% of knowledge in BackEnd',
              data: [25,25,50],
              backgroundColor: [
                'rgba(0, 102, 255,.5)',
                'rgba(0, 153, 51,.5)',
                'rgba(255, 102, 0,.5)'
              ], //bgcolor
              borderWidth: 3,
              borderColor: '#2e3133'
            }], // datasets
            labels: [
              'Symfony',
              'NodeJS',
              'Pure PHP'
            ] // labels
          }, // data
          options: {
            animation: {
              duration: 3000
            }
          } // options
        }); // chart end
      },500); // interval End
    } // visible end
  } // if chartset end    
}); // scroll end


