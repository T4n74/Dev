(function () {
    let path = document.querySelector('#sidebar-wave path')
    let sidebarLinks = document.querySelectorAll('.sidebar a')
    let from = path.getAttribute('d')
    let to = path.getAttribute('data-to') // Firefox n'aime pas le dataset :(
    let options = {
        type: dynamics.easeOut,
        duration: 450,
        friction: 450
    }


    let sidebarOpened = false
    let button = document.querySelector('#menu')

    // On clique pour ouvrir le menu
    button.addEventListener('click', function (e) {
        // On empèche la propagration vers le parent
        e.stopPropagation()
        e.preventDefault()
        document.body.classList.add('has-sidebar')
        // On anime le SVG
        dynamics.animate(path, {
            d: to
        }, options)
        // Et les liens
        sidebarLinks.forEach(function (link, i) {
            dynamics.animate(link, {
                translateX: 0
            }, Object.assign({}, options, {delay: 50 * i, duration: 300}))
        })
        sidebarOpened = true
    })

    // On clique sur le body pour masquer la sidebar
    document.body.addEventListener('click', function () {
        if(sidebarOpened) {
            document.body.classList.remove('has-sidebar')
            dynamics.animate(path, {
                d: from
            }, options)
            sidebarLinks.forEach(function (link, i) {
                dynamics.animate(link, {
                    translateX: 200
                }, options)
            })
        }
    })

})()