const magnifier = document.getElementById("image-zoom");
const img = document.querySelector("img");

magnifier.addEventListener("mousemove", (e) => {
  const x = e.clientX - e.target.offsetLeft;
  const y = e.clientY - e.target.offsetTop;

  console.log(x,y);

  img.style.transformOrigin = `${x}px ${y}px`;
  img.style.transform = "scale(2)"

  
})
magnifier.addEventListener("mouseleave", () => {
  img.style.transformOrigin = "center";
  img.style.transform="scale(1)";
} )