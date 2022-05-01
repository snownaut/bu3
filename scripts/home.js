const searchInput = document.querySelector("#searchInput");
const searchBtn = document.querySelector("#search");
const tvshowContainer = document.querySelector(".suggested-movies");

searchBtn.addEventListener("click", () => {
  fetch(`https://api.tvmaze.com/search/shows?q=${searchInput.value}`)
    .then((httpResponse) => {
      return httpResponse.json();
    })
    .then((data) => {
      console.log(data);

      tvshowContainer.innerHTML = "";

      data.forEach((tvshow) => {
        const tvshowElement = document.createElement("div");
        tvshowElement.classList.add("suggested-movie");
        tvshowContainer.appendChild(tvshowElement);

        const tvshowImgElement = document.createElement("img");
        tvshowImgElement.src = tvshow.show.image.medium;
        tvshowElement.appendChild(tvshowImgElement);

        const tvshowDetailsElement = document.createElement("div");
        tvshowDetailsElement.classList.add("movie-details");
        const tvshowTitleElement = document.createElement("h3");
        tvshowTitleElement.textContent = tvshow.show.name;
        tvshowDetailsElement.appendChild(tvshowTitleElement);
        const tvshowDescElement = document.createElement("div");
        tvshowDescElement.classList.add("movie-summary");
        tvshowDescElement.innerHTML = tvshow.show.summary;
        tvshowDetailsElement.appendChild(tvshowDescElement);

        tvshowElement.appendChild(tvshowDetailsElement);

        const tvshowLinkElement = document.createElement("a");
        tvshowLinkElement.href = `/single-item.php?movieid=${tvshow.show.id}`;
        tvshowLinkElement.textContent = "Show more";
        tvshowDetailsElement.appendChild(tvshowLinkElement);
      });
    });
});
