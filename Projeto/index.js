// const navbarAutocomplete = document.querySelector('#navbar-search-autocomplete');
// const navbarData = ['One', 'Two', 'Three', 'Four', 'Five'];
// const navbarDataFilter = (value) => {
//   return navbarData.filter((item) => {
//     return item.toLowerCase().startsWith(value.toLowerCase());
//   });
// };

// new mdb.Autocomplete(navbarAutocomplete, {
//   filter: navbarDataFilter,
// });

const words = [
  { name: "GTA V", image: "imagens/jogos/gta.png" },
  { name: "CS:GO", image: "imagens/jogos/csgo.png" },
  { name: "Need For Speed: Unbound", image: "imagens/jogos/nfs.jpg" },
  { name: "NBA 2K22", image: "imagens/jogos/nba.png" },
  { name: "Red Dead Redemption II", image: "imagens/jogos/red dead redemption.jpg" },
  { name: "F1 22", image: "imagens/jogos/f1 22.png" },
  { name: "Rocket League", image: "imagens/jogos/rocketleague.jpg" },
  { name: "Minecraft", image: "imagens/jogos/minecraft.png" },
  { name: "Call of Duty: Cold War", image: "imagens/jogos/callofdutycoldwar.png" },
  { name: "Forza Horizon 5", image: "imagens/jogos/forza.png" },
  { name: "FIFA 23", image: "imagens/jogos/fifa23.jpg" },
  { name: "Spider-Man: Miles Morales", image: "imagens/jogos/spider man.jpg" },
  { name: "Resident Evil VII", image: "imagens/jogos/revil.jpg" },
  { name: "Overwatch 2", image: "imagens/jogos/overwatch.jpg" },
  { name: "Mortal Kombat 11", image: "imagens/jogos/mortal kombat 11.png" },
  { name: "Madden NFL 23", image: "imagens/jogos/nfl.jpg" },
  { name: "Rainbow Six Siege", image: "imagens/jogos/rainbow.jpg" },
  { name: "ARK: Survival Evolved", image: "imagens/jogos/ark.jpg" },
  { name: "Halo Infinite", image: "imagens/jogos/halo.png" }
];

const searchInput = document.getElementById("search");
const suggestions = document.querySelector(".search-suggestions");

searchInput.addEventListener("input", function() {
  const input = this.value.toLowerCase();
  const matchingWords = words.filter(function(word) {
    return word.name.toLowerCase().includes(input);
  });

  const suggestionList = matchingWords.map(function(word) {
    const link = word.name.toLowerCase().replace(/[\s:]/g, "");
    return `<a style="text-decoration: none;" href="${link}.php"><li><img src="${word.image}" alt="${word.name}">${word.name}</li></a>`;
  });

  if (input && matchingWords.length > 0) {
    suggestions.innerHTML = `<ul>${suggestionList.join("")}</ul>`;
    suggestions.style.display = "block";
  } else {
    suggestions.innerHTML = "";
    suggestions.style.display = "none";
  }
});

document.addEventListener("click", function(event) {
  if (!event.target.matches("#search") && !event.target.matches(".search-suggestions *")) {
    suggestions.innerHTML = "";
    suggestions.style.display = "none";
  }
});

