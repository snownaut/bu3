const tvshowImgElement = document.querySelector(".image-container img");
const tvshowNameElement = document.querySelector(".text-container h2");
const tvshowGenreElement = document.querySelector(".text-container h3");
const tvshowSummaryElement = document.querySelector(".text-container p");

fetch(`https://api.tvmaze.com/shows/${document.location.search.split("=")[1]}`)
  .then((httpResponse) => {
    return httpResponse.json();
  })
  .then((data) => {
    console.log(data);

    tvshowImgElement.src = data.image.medium;
    tvshowNameElement.textContent = data.name;
    tvshowGenreElement.textContent = data.genres.join(" ");
    tvshowSummaryElement.innerHTML = data.summary;
  });
