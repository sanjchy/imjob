window.addEventListener("load", () => {
    setTimeout(() => {
        var elemDiv = document.createElement("div");
        elemDiv.id = "companyRegistered";
        document.body.prepend(elemDiv);
    }, 2000);

    console.log("document loaded");

    async function getElement() {
        return new Promise((resolve, reject) => {
            interval = setInterval(() => {
                var target = document.getElementById("companyRegistered");
                console.log("inside the promise object");
                if (target) {
                    console.log(target);
                    console.log("Element is found and rendered!");
                    resolve(target);
                }
            }, 1000);
        });
    }
    getElement().then(element => {
        clearInterval(interval);
        console.log(element);
        setTimeout(() => {
            var node = document.createElement("LI"); // Create a <li> node
            var textnode = document.createTextNode("Water"); // Create a text node
            node.appendChild(textnode); // Append the text to <li>
            element.append(node);
        }, 1000);
    });
});
