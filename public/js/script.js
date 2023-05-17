
// Bagian header
let toggleBtn = document.querySelector('#navbar-toggle');
let collapse = document.querySelector('#navbar-collapse');

toggleBtn.onclick = () => {
  collapse.classList.toggle('hidden');
  collapse.classList.toggle('block');
};

// Bagian about
const progressBarContainers = document.querySelectorAll('.progress-bar__container');

progressBarContainers.forEach((container) => {
  const progressBar = container.querySelector('.progress-bar');
  const progressBarStates = [0, 7, 27, 34, 68, 80, 95, 100];
  let time = 0;
  let endState = 100;
  progressBarStates.forEach((state) => {
    let randomTime = Math.floor(Math.random() * 1000);
    setTimeout(() => {
      if (state == endState) {
        gsap.to(progressBar, {
          x: `${state}%`,
          duration: 2,
          backgroundColor: '#865DFF',
          onComplete: () => {
            container.style.boxShadow = '0 0 5px #C3E93A';
          },
        });
      } else {
        gsap.to(progressBar, {
          x: `${state}%`,
          duration: 2,
        });
      }
    }, randomTime + time);
    time += randomTime;
  });
});

// Bagian Section 2
document.querySelectorAll('.video-container video').forEach((vid) => {
  vid.onclick = () => {
    document.querySelector('.popup-video').style.display = 'block';
    document.querySelector('.popup-video').src = vid.getAttribute('src');
  };
});
document.querySelector('.popup-video span').onclick = () => {
  document.querySelector('.popup-video').style.display = 'none';
};

// BAGIAN FAQ
function openAnsSection(val) {
  var p = document.getElementById('para' + val);
  var svg = document.getElementById('path' + val);

  if (p.classList.contains('hidden')) {
    p.classList.remove('hidden');
    p.classList.add('block');
  } else {
    p.classList.remove('block');
    p.classList.add('hidden');
  }

  if (svg.classList.contains('hidden')) {
    svg.classList.remove('hidden');
    svg.classList.add('block');
  } else {
    svg.classList.remove('block');
    svg.classList.add('hidden');
  }
}
