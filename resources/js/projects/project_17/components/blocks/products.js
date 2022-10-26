import { CATALOG } from "../../constants/catalog";
import { ROOT_PRODUCTS } from "../../constants/root";

class Products {

    render(){
        let htmlCatalog = '';

        CATALOG.forEach(({ id, name, price, img }) => {

            htmlCatalog += `
                <li class="products__element element">
                    <span class="element__name">${name}</span>
                    <img class="element__img" src="${img}" alt="guitar" width="200px" />
                    <span class="element__price">
                        ⚡️ ${price.toLocaleString()} USD
                    </span>
                    <button class="element__btn">Добавить в корзину</button>
                </li>
            `;
        })

        const html = `
            <ul class="products__container">
                ${htmlCatalog}
            </ul>
        `;

        ROOT_PRODUCTS.innerHTML = html;
    }
}

const productsPage = new Products();
productsPage.render();

export {
    Products
}