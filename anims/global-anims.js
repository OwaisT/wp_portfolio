gsap.registerPlugin(ScrollTrigger);

const smthAppr = document.querySelectorAll('.smth-appr');
if (smthAppr.length > 0) {

    gsap.utils.toArray(smthAppr).forEach(elem => {
        gsap.from(elem, {
            scrollTrigger: {
                trigger: elem,
                start: 'top 70%', // Adjust as needed
            },
            duration: 1,
            opacity: 0,
            ease: "power2.out"
        });
    });
}

const sldIn = document.querySelectorAll('.sld-in');
if (sldIn.length > 0) {
    gsap.from(sldIn, {
        scrollTrigger: {
            trigger: sldIn,
            start: 'top 70%', // Adjust as needed
        },
        duration: 1,
        x: -200,
        opacity: 0,
        ease: "power2.in"
    });
}

const sldInsStgrd = document.querySelectorAll('.sld-ins-stgrd');
if (sldInsStgrd.length > 0) {
    gsap.utils.toArray(sldInsStgrd).forEach(elem => {

        const sldInStgr = elem.querySelectorAll(':scope .sld-in-stgr');
        const btn = elem.querySelectorAll(':scope .cntct-btn');

        gsap.from(sldInStgr, {
            scrollTrigger: {
                trigger: elem,
                start: 'top 70%', // Adjust as needed
            },
            duration: 1,
            x: -200,
            opacity: 0,
            ease: "power2.out",
            stagger: 0.2,
            onComplete: () => {
                if (btn.length > 0) {
                    gsap.to(btn, {
                        duration: 0.5,
                        x: 0,
                        opacity: 1,
                        ease: "power2.out",
                    });
                }
            }
        });
    });
}

const lngAppr = document.querySelectorAll('.lng-appr');
if (lngAppr.length > 0) {
    gsap.from(lngAppr, {
        duration: 4,
        opacity: 0,
        ease: "power2.out",
    });
}

const spin = document.querySelectorAll('.spin');
if (spin.length > 0) {
    gsap.from('.spin', {
        scrollTrigger: {
            trigger: ".spin",
            start: "top 80%"
        },
        duration: 2,
        rotation: -360,
        opacity: 0,
        ease: "power2.out"
    });
}
