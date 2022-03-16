const cardType = document.getElementById('switcherCard');
const switchCard = document.getElementById('productType')
const cardProducts = document.getElementById('cards');

class CardsProducts {
    constructor() {
        this.cardType = cardType;
    }

    createCard() {
        const cardAddProd = document.createElement('div')
        cardAddProd.classList.add('card', 'card-body', 'card-add')
        cardType.appendChild(cardAddProd);
        cardAddProd.setAttribute('id', 'cardRegister')
    }

    cleanCard() {
        this.cardType.innerHTML = ''
    }
}

class CardDvd extends CardsProducts {
    constructor() {
        super();
    }
    createDvdCard() {
        const sku = document.getElementById('sku');
        const name = document.getElementById('name');
        const price = document.getElementById('price');
        const form = document.getElementById('product_form');
        this.cleanCard();
        this.createCard();
        document.getElementById('cardRegister').innerHTML =
            `
        <p>
        Size (MB) <input type="number" name="size" class="input-form-head" id="size" min="1" required>
        </p>
        <p>"Please, provide the size in MB"</p>
        `
        sku.setAttribute('name', 'skuDvd');
        name.setAttribute('name', 'nameDvd');
        price.setAttribute('name', 'priceDvd');
        form.setAttribute('action', 'addDvd.php')
    }
}

class CardBook extends CardsProducts {
    constructor() {
        super();
    }
    createBookCard() {
        const sku = document.getElementById('sku');
        const name = document.getElementById('name');
        const price = document.getElementById('price');
        const form = document.getElementById('product_form');

        this.cleanCard();
        this.createCard();
        document.getElementById("cardRegister").innerHTML = `
        <p>
        Weight (MB) <input type="number" name="weight" class="input-form-head" id="weight" required>
        </p>
        <p>"Please, provide the weight"</p>
        `;
        sku.setAttribute('name', 'skuBook');
        name.setAttribute('name', 'nameBook');
        price.setAttribute('name', 'priceBook');
        form.setAttribute('action', 'addBook.php')
    }
}

class CardFurniture extends CardsProducts {
    constructor() {
        super();

    }
    createFurnitureCard() {
        const sku = document.getElementById('sku');
        const name = document.getElementById('name');
        const price = document.getElementById('price');
        const form = document.getElementById('product_form');

        this.cleanCard();
        this.createCard();
        document.getElementById("cardRegister").innerHTML = `
        <p>
        Heigth (CM) <input type="number" name="height" class="input-form-head" id="height" required>
        Width (CM) <input type="number" name="width" class="input-form-head" id="width" required>
        Length (CM) <input type="number" name="length" class="input-form-head" id="length" required>
        </p>
        <p>"Please, provide dimensions in HxWxL"</p>
        `;
        sku.setAttribute('name', 'skuFurniture');
        name.setAttribute('name', 'nameFurniture');
        price.setAttribute('name', 'priceFurniture');
        form.setAttribute('action', 'addFurniture.php')
    }
}

class CardNone extends CardsProducts {
    constructor() {
        super();

    }
    cardNone() {
        const sku = document.getElementById('sku');
        const name = document.getElementById('name');
        const price = document.getElementById('price');
        sku.setAttribute('name', 'sku');
        name.setAttribute('name', 'name');
        price.setAttribute('name', 'price');
        this.cardType.innerHTML = "";
    }
}

const cardDvd = new CardDvd()
const cardBook = new CardBook()
const cardFurniture = new CardFurniture()
const cardNone = new CardNone()

function openCards() {
    if (switchCard.value === 'dvd') {
        cardDvd.createDvdCard()
    } else if (switchCard.value === 'book') {
        cardBook.createBookCard()
    } else if (switchCard.value === 'furniture') {
        cardFurniture.createFurnitureCard()
    } else if (switchCard.value === 'none') {
        cardNone.cardNone()
        return
    }
}