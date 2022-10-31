// Get all the elements that have a class of .card-rating
let ratingContainer = document.querySelectorAll(".card-rating");

ratingContainer.forEach((item) => {
    // Get the number of stars given by the reviewer
    let numberOfStars = parseInt(item.dataset.rating);

    for (let i = 0; i < numberOfStars; i++){
        // Use fontawesome star iccon
        let star = document.createElement("i");
        star.classList.add("fa-solid", "fa-star");

        // Add star icon inside the element
        item.appendChild(star);
    }
})
