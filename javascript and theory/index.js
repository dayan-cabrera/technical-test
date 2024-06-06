function reverseChain(cadena) {
  let aux = cadena.split("");
  aux.reverse();
  let res = aux.join("");

  return res;
}

let text = "Hola mundo";
console.log(text);

text = reverseChain(text);

console.log(text);

const numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

const pair = numbers.filter((numb) => numb % 2 === 0);

console.log("Números pares:", pair);

/*
document.addEventListener("DOMContentLoaded",() => {
  const button = document.getElementById("myButton");

  button.addEventListener("click",() => {
    alert("Hello World");
  });
});
*/

const fetchDataAndDisplay = () => {
  const apiUrl = "https://jsonplaceholder.typicode.com/posts/1";

  fetch(apiUrl)
    .then((res) => {
      if (!res.ok) {
        throw new Error("error");
      }
      //   console.log(res);
      return res.json();
    })
    .then((data) => {
      console.log(data);
      //   document.getElementById("result").innerHTML = `
      //   <h2>${data.title}</h2>
      //   <p>${data.body}</p>
      // `;
    })
    .catch((err) => {
      console.error("Error:", err);
    });
};

fetchDataAndDisplay();

const saveToLocalStorage = (key, value) => {
  const valueStr = JSON.stringify(value);
  localStorage.setItem(key, valueStr);
};

const getFromLocalStorage = (key) => {
  const valueStr = localStorage.getItem(key);
  if (!valueStr) {
    return null;
  }
  const value = JSON.parse(valueStr);
  return value;
};
