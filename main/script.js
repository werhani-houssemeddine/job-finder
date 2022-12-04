const getRandom = () => Math.floor(Math.random() * 20);

const article = document.querySelector('article');

async function getArticle(id) {
  const data = await fetch(`https://fakestoreapi.com/products/${id}`);
  const result = await data.json();
  
}

