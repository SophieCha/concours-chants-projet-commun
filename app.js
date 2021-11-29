document.querySelector("#queryArtists").addEventListener("input", (e) => {
  const query = e.target.value;
  search(query);
});

function search(param) {
  const url = `http://217.182.174.155:5000/ws/2/artist?query=${param}&fmt=json`;
  fetch(url)
    .then((response) => response.json())
    .then((data) => {
      console.log("data", data);
      const artists = data.artists;
      artists.forEach((element) => {
        const nameArtist = element["sort-name"];
        document.querySelector(
          "#artists"
        ).innerHTML += `<option value="${nameArtist}">${nameArtist}</option>`;
      });
    })
    .catch((err) => console.log(err));
}
