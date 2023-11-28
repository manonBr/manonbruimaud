// TOGGLE MENU ON MOBILE
document.querySelector("#menu__hamburger").addEventListener("click", (e) => {
    const menuHamburger = e.target
    const menu = document.getElementsByClassName("menu")[0]
    menu.classList.remove("shidden")
    menu.classList.toggle("showNav")
    menu.classList.toggle("hideNav")
    menuHamburger.classList.toggle("icon-menu")
    menuHamburger.classList.toggle("icon-close")
});

// CURSOR ANIMATION
const body = document.body
const cursor = document.querySelector("#cursor")
const links = document.querySelectorAll("a, button");

body.addEventListener("mousemove", function (e) {
    (cursor.style.left = e.clientX + "px"), (cursor.style.top = e.clientY + "px");
});

links.forEach((link) => {
    link.addEventListener("mouseover", () => {
        cursor.classList.add("cursor--hovered");
    })
    link.addEventListener("mouseleave", () => {
        cursor.classList.remove("cursor--hovered");
    })
});

// DELAY APPARITION ANIMATION
const ratio = 0.2
const options = { root: null, rootMargin: "0px", threshold: 0.2 }

handleIntersect = (e, t) => {
    for (entry of e) {
        if(entry.intersectionRatio > 0.2 && (entry.target.classList.add("reveal--visible"))) {
            t.unobserve(entry.target)
        }

    } 
}

observer = new IntersectionObserver(handleIntersect, options)

function offsetTop(e, t = 0) {
    return e.offsetParent ? offsetTop(e.offsetParent, t + e.offsetTop) : t + e.offsetTop;
}
document.querySelectorAll(".reveal").forEach((e) => {
    observer.observe(e);
});

// PARALLAX ANIMATION
class Parallax {
    constructor(element) {
        this.element = element
        this.ratio = parseFloat(element.dataset.parallax)
        this.onScroll = this.onScroll.bind(this)
        this.onIntersection = this.onIntersection.bind(this)
        this.elementY = offsetTop(this.element) + this.element.offsetHeight / 2
        new IntersectionObserver(this.onIntersection).observe(element)
        this.onScroll()
    }
    onIntersection(entries) {
        for (const entry of entries) {
            if(entry.isIntersecting) {
                document.addEventListener("scroll", this.onScroll)
                this.elementY = offsetTop(this.element) + this.element.offsetHeight / 2

            } else {
                document.removeEventListener("scroll", this.onScroll)
            }

        }
        
    }
    onScroll() {
        window.requestAnimationFrame(() => {
            const screenY = window.scrollY + window.innerHeight / 2
            const diffY = this.elementY - screenY;
            this.element.style.setProperty(
                "transform",
                `translateY(${-1 * diffY * this.ratio}px)`)
        })
    }
    static bind() {
        return Array.from(document.querySelectorAll('[data-parallax]')).map(
            (element) => {
                return new Parallax(element)
            }
        )
    }
}
Parallax.bind()


// SCRUMBLE ANIMATION SUBTITLE
const sentence = "Frontend developer (React)";
class TextScramble {
    constructor(element) {
        this.element = element
        this.chars = "!<>-_\\/[]{}—=+*^?#________"
        this.update = this.update.bind(this)
    }
    setText(newText) {
        const length = newText.length
        const promise = new Promise((resolve) => (this.resolve = resolve))
        this.queue = []
        for (let i = 0; i < length; i++) {
            const to = newText[i] || ""
            const start = Math.floor(150 * Math.random())
            const end = start + Math.floor(150 * Math.random())
            this.queue.push({ to, start, end })
        }
        cancelAnimationFrame(this.frameRequest)
        this.frame = 0
        this.update()
        return promise
    }

    update() {
        let output = ""
        let complete = 0
        for (let i = 0, n = this.queue.length; i < n; i++) {
            let { to, start, end, char } = this.queue[i];
            if(this.frame >= end) {
                complete++
                output += to

            } else if (this.frame >= start) {
                if(!char || Math.random() < 0.28) {
                    char = this.randomChar()
                    this.queue[i].char = char
                }
                output += `<span class="dud">${char}</span>`
            }
        }
        this.element.innerHTML = output
        if(complete === this.queue.length) {
            this.resolve()
        } else {
            this.frameRequest = requestAnimationFrame(this.update)
            this.frame++
        }
    }
    randomChar() {
        return this.chars[Math.floor(Math.random() * this.chars.length)];
    }
}

const element = document.querySelector(".scramble");


// SCRAMBLE + SET EMAIL TEXT
window.onload = () => {
    setTimeout(() => {
        new TextScramble(element).setText(sentence)
    }, 300)
    const email = document.querySelector(".contact__email");
    email.setAttribute("href", "mailto:manon.bruimaud@gmail.com"), (email.innerText = "manon.bruimaud@gmail.com");
}
