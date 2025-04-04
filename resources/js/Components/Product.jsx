import { useEffect, useState } from "react";

const Product = () => {
  const [products, setProducts] = useState([]);

  async function getProduct() {
    const response = await fetch("https://fakestoreapi.com/products/");
    const data = await response.json();
    setProducts(data);
  }

  useEffect(() => {
    getProduct();
  }, []);

  console.log(products);

  return (
    <div>
      <div className="w-full px-4 grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 space-x-3 space-y-3">
        {products &&
          products.map((product) => (
            <div key={product.id} className="shadow-lg px-10 py-5">
              <div className="flex items-center justify-center">
                <img
                  src={product.image}
                  alt="image"
                  className="h-52 rounded-md"
                />
              </div>
              <div className="mt-6 h-40">
                <h6 className="font-bold text-black">{product.title}</h6>
                <h6 className="font-small text-black mt-2">
                  {product.description.slice(0, 52)}...
                </h6>
                <h3 className="font-normal mt-2">${product.price}</h3>
              </div>

              
                <button
                  className=" bg-green-600 text-white px-6 py-3 shadow-md hover:bg-green-800"
                >
                  Add to Cart
                </button>
              
            </div>
          ))}
      </div>
    </div>
  );
};

export default Product;