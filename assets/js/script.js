

// -------------------gsap scrollAnimation

var tl = gsap.timeline({
    scrollTrigger: {
        trigger: "#main",
        // markers: true,  
        start: "40% 50%",  
        end: "100% 50%",   
        scrub: 2,
        pin: true
    }
});

tl
.to("#top",{
    top:"-50%"
},'a')
.to("#bottom",{
    bottom:"-50%"
},"a")
.to("#top-h",{
    top:"80%"
},"a")
.to("#bottom-h",{
    bottom:"-80%"
},"a")