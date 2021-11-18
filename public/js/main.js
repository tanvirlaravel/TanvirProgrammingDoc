const h2Collection = document.querySelectorAll("h2");
    const sidebarMenu = document.querySelector("#sidebar_menu")

    console.log(sidebarMenu)
    
    h2Collection.forEach(el => {
        const elText = el.textContent
        const id = elText.replace(/ /g,"_");

        const arr = elText.split(" ");
        for (let i = 0; i < arr.length; i++) {
            arr[i] = arr[i].charAt(0).toUpperCase() + arr[i].slice(1);
        
        }      

        const linkText = arr.join(" ");

        // Set Id
        el.id=id

        
        // Create sidebar menu
        const li = `<li class="list-group-item"><a href="#${id}">${linkText}</a></li>`
        sidebarMenu.innerHTML  += li 
    })