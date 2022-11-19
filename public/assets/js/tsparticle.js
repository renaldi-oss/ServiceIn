const ts = document.getElementById('tsparticles');

if(ts){
  tsParticles.load('tsparticles', {
    particles: {
        color: {
        value: '#CF5C36'
        },
        opacity: {
            value: 0.5
        },
        lineLinked: {
        color: {
            value: '#EFC88B'
        },
        consent: true
        },
        move: {
            enable: true,
            speed: 1
        },
    },
    interactivity: {
        events: {
        onHover: {
            mode: ['grab', 'bubble'],
            enable: true
        }
        },
        modes: {
        grab: {
            distance: 200
        },
        bubble: {
            size: 10
        }
        }
    },
    preset: 'basic'
    });

}
