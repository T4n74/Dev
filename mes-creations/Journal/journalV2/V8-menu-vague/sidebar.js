(function (){
		let path = document.querySelector('#sidebar-wave path')
		let from = path.getAttribute('d')
		let to = path.getAttribute('data-to') // Firefox n'aime pas le dataset :(
		Let options = {
		type: dynamics.easeOut,
		duration: 450,
		friction: 450
		}



		let sidebarOpened = false
		let button = document.querySelector('#menu')
		button.addEventListener('click', function (e) {
			e.stopPropagation() // stop la propagation afin d'empeché que l'elelment parent ne se declenche'
			e.preventDefault()
			document.body.classlist.add('has-sidebar')
			dynamics.animate(path,{
				d: to
			}, options)
			sidebarOpened = true
		})

		document.body.addEventListener('click', function () {
			if(sidebarOpened) {

			document.body.classlist.remove('has-sidebar')  //  suppression de la classe has-sidebar
			dynamics.animate(path.{
				d: from
			}, options)

			}
		})
})()