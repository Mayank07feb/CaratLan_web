@extends('components.main')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mx-4 lg:mx-12 w-full mt-44">
    <!-- Main Content Section -->
<div class="space-y-8">
  <!-- Gold Rate Section -->
<div class="bg-gradient-to-r from-yellow-400 to-yellow-200 p-6 rounded-lg shadow-lg">
  <h2 class="text-2xl font-semibold mb-4 text-purple-900">Check Gold Rate in Your City</h2>
  
  <!-- State and City Selectors -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
      <select class="p-2 rounded-md border border-gray-300 w-full focus:outline-none focus:ring-2 focus:ring-purple-600 transition duration-300 ease-in-out">
          <option value="" disabled selected>Select State</option>
          <!-- Add dynamic state options here -->
      </select>
      <select class="p-2 rounded-md border border-gray-300 w-full focus:outline-none focus:ring-2 focus:ring-purple-600 transition duration-300 ease-in-out">
          <option value="" disabled selected>Select City</option>
          <!-- Add dynamic city options here -->
      </select>
  </div>
  
  <!-- Display Gold Rate -->
  <div class="text-xl font-bold text-purple-900">
      ₹ 7110 <span class="text-sm font-normal">/Gram (22ct)</span>
  </div>
  
  <p class="text-sm text-gray-600 mt-2">*Price may vary by city</p>
</div>


        <!-- Digital Gold Section -->
<div class="grid md:grid-cols-2 gap-6 bg-gradient-to-r from-purple-900 via-indigo-700 to-purple-900 text-white rounded-lg overflow-hidden">
            <div class="p-6 relative flex flex-col justify-between">
                <h2 class="lg:text-2xl md:text-lg text-sm font-semibold mb-4">Invest securely in eGold - Digital Gold</h2>
                <p class="mb-4">Discover the smart way to invest and gift with Digital Gold. Our platform offers a secure and straightforward path to buy, sell, and exchange 24K pure digital gold online.</p>
                <button class="bg-amber-300 text-purple-900 px-6 py-2 rounded-md font-semibold hover:bg-amber-400 transition-colors mt-auto">
                    Buy Digital Gold Now
                </button>
                <img src="{{asset('asset/img/pigbank.png')}}" alt="Piggy bank" class="absolute bottom-4 right-4 w-16 h-16" />
            </div>
            <div class="w-full h-full">
                <img src="{{asset('asset/img/goldrate2.png')}}" alt="Best jewelry collection" class="w-full h-full object-cover" />
            </div>
</div>

        <!-- Product Grid Section -->
<div class="bg-white p-6 rounded-lg shadow-lg">
          <h2 class="lg:text-2xl md:text-xl text-sm font-semibold mb-6 text-purple-900">Invest in Gold Jewellery</h2>
          
          <!-- Slick Slider Container -->
          <div class="slick-slider">
              <!-- Product Card 1 -->
              <div class="bg-white rounded-lg p-4 shadow-sm">
                  <img src="{{asset('')}}" alt="Gold coin" class="w-full rounded-lg mb-4"/>
                  <p class="text-lg font-semibold">₹1,68,200</p>
                  <p class="text-sm text-gray-600">22g 24K</p>
              </div>
      
              <!-- Product Card 2 -->
              <div class="bg-white rounded-lg p-4 shadow-sm">
                  <img src="/api/placeholder/200/200" alt="Gold coin" class="w-full rounded-lg mb-4"/>
                  <p class="text-lg font-semibold">₹1,54,214</p>
                  <p class="text-sm text-gray-600">20g 22K</p>
              </div>
      
              <!-- Product Card 3 -->
              <div class="bg-white rounded-lg p-4 shadow-sm">
                  <img src="/api/placeholder/200/200" alt="Gold coin" class="w-full rounded-lg mb-4"/>
                  <p class="text-lg font-semibold">₹67,442</p>
                  <p class="text-sm text-gray-600">8g 24K</p>
              </div>
      
              <!-- Product Card 4 -->
              <div class="bg-white rounded-lg p-4 shadow-sm">
                  <img src="/api/placeholder/200/200" alt="Gold coin" class="w-full rounded-lg mb-4"/>
                  <p class="text-lg font-semibold">₹38,757</p>
                  <p class="text-sm text-gray-600">5g 22K</p>
              </div>
          </div>
</div>
<script>
        $(document).ready(function(){
            $('.slick-slider').slick({
                infinite: true,            // Infinite loop
                slidesToShow: 1,           // Show one slide at a time
                slidesToScroll: 1,         // Scroll one slide at a time
                arrows: true,              // Enable previous/next arrows
                dots: true,                // Show dots navigation
                responsive: [
                    {
                        breakpoint: 768,  // For smaller screens
                        settings: {
                            slidesToShow: 1,   // Show 1 item
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 1024, // For medium screens
                        settings: {
                            slidesToShow: 2,  // Show 2 items
                            slidesToScroll: 2
                        }
                    }
                ]
            });
        });
</script>
<div class="bg-white p-6 rounded-lg shadow-lg px-4">
          <!-- Title Section -->
          <h1 class="lg:text-3xl md:text-xl text-sm font-semibold text-purple-900 mb-4">How do you calculate gold rate?</h1>
          
          <!-- Introduction -->
          <h2 class="lg:text-xl md:text-sm text-xs text-gray-800 mb-4">To calculate the gold rate, you need to know the current spot price and gold purity. The spot price of gold is the current price of gold per gram on the open market.</h2>
          
          <p class="lg:text-lg md:text-md text-sm text-gray-700 mb-4">Gold purity is measured in karats - 24 karat gold is 100% pure gold, 18 karat gold is 75% pure gold, 14 karat gold is 58.3% pure gold, and ten karat gold is 41.7% pure gold. To calculate the gold rate, follow this formula:</p>
      
          <!-- Calculation Process -->
          <p class="lg:text-lg md:text-md text-sm text-gray-700 mb-4 font-semibold">Final price of (22 or 18 K) gold multiplied by the weight in grams + making charges + GST on the price of jewellery + making charges.</p>
      
          <!-- List of Calculation Steps -->
          <ul class="list-disc pl-6 text-gray-700 mb-6 lg:text-lg md:text-md text-sm">
              <li>If the gold rate today for 10 grams of 22 karats of pure gold is INR 50,000,</li>
              <li>The price of 1 gram of gold is INR 5,000.</li>
              <li>If you want gold jewellery that weighs 8 grams, the price is 5000 x 8 = INR 40,000.</li>
              <li>If the making charges are 10% of the gold price, it is INR 4,000.</li>
              <li>The total price becomes INR 40,000 + INR 4,000 = INR 44,000.</li>
              <li>Now add 3% of GST on gold, i.e., 3% of INR 44,000 = INR 1,320.</li>
              <li>Final price is INR 44,000 + INR 1,320 = INR 45,320.</li>
          </ul>
      
          <!-- Additional Info -->
          <p class="lg:text-lg md:text-md text-sm text-gray-700 mb-4">Note: There are no making charges or wastage included in this estimate, which are determined by the product's craftsmanship.</p>
</div>
      {{-- Content --}}
<div class="bg-[#F6F3F9] lg:text-lg md:text-sm textxs px-4">
        <h1 class="text-xs md:text-md">Why Does Gold's Price Fluctuate? - The Top 10 Factors</h1>
        <h2 class="text-xs md:text-md">Inflation</h2>
        <p class="text-xs md:text-md">While rising inflation brings the value of money down, it makes buying gold more appealing. Economic unpredictability increases the demand for gold because we want to invest in gold, which is considered safer than cash.</p>

        <h2 class="text-xs md:text-md">Jewellery Associations</h2>
        <p class="text-xs md:text-md">Associations like the Indian Bullion Jewellers Association also have a say in gold rates. Several states across the country have associations like the Jewellers and Diamond Traders Association Tamil Nadu. They set the gold price within each city.</p>

        <h2 class="text-xs md:text-md">Purchase Price</h2>
        <p class="text-xs md:text-md">One of the most critical factors in determining gold rate is the purchase price. Jewellers who have bought gold in bulk at lower prices will sell at lower prices. The source of gold will also be a factor.</p>

        <h2 class="text-xs md:text-md">Central Bank Actions</h2>
        <p class="text-xs md:text-md">The actions of central banks can also have a big impact on gold prices. Central banks hold large reserves of gold, and they can buy or sell gold on the open market. When central banks buy gold, it increases demand, and prices typically go up. However, when central banks sell gold, it decreases demand, and gold prices typically go down.</p>
      
        <h2 class="text-xs md:text-md">Currency Fluctuation</h2>
        <p class="text-xs md:text-md">Currency strength can affect gold price in India in a few ways. A strong currency can make gold less expensive for buyers using other currencies, leading to increased demand and higher prices.</p>

        <h2 class="text-xs md:text-md">Quantity of Gold</h2>
        <p class="text-xs md:text-md"> Certain parts of India have a higher demand for gold than others. For instance, South India accounts for almost 40% of India's gold imports.</p>

        <h2 class="text-xs md:text-md">Seasonal Demand in India</h2>
        <p class="text-xs md:text-md">Weddings, special occasions, and festive seasons affect gold rates because the demand for gold is highest during these times. People buy more gold jewellery or gold coins on auspicious occasions, which impacts gold rates.</p>

        <h2 class="text-xs md:text-md">Market Conditions</h2>
        <p class="text-xs md:text-md">Global market conditions also impact gold rates. When gold price rises in the global market, it affects gold rates in India.</p>

        <h2 class="text-xs md:text-md">Production Costs</h2>
        <p class="text-xs md:text-md">Mining companies may increase gold prices because of their high production costs. The cost of production affects the gold rate because it determines gold's supply and demand.</p>


        <h2 class="text-xs md:text-md">Transport Costs</h2>
        <p class="text-xs md:text-md">Gold, as a physical asset, requires transportation, and India is one of the major importers. Gold must be transported to different parts of the country, and the cost includes fuel, vehicles, security, etc.</p>
</div>

<div class="max-w-6xl mx-auto px-4 py-8 ">
        <header>
            <h1 class="lg:text-xl md:text-md text-sm font-semibold text-gray-800 mb-8">Why Does Gold's Price Fluctuate? - The Top 10 Factors</h1>
        </header>

        <section>
            <h2 class="lg:text-xl md:text-sm font-semibold text-gray-800 mt-8">1. Inflation</h2>
            <p class="lg:text-lg md:text-md text-sm text-gray-600 mt-2">While rising inflation brings the value of money down, it makes buying gold more appealing. Economic unpredictability increases the demand for gold because it is considered safer than cash.</p>
        </section>

        <section>
            <h2 class="lg:text-xl md:text-md text-sm font-semibold text-gray-800 mt-8">2. Jewellery Associations</h2>
            <p class="lg:text-lg md:text-md text-sm text-gray-600 mt-2">Associations like the Indian Bullion Jewellers Association influence gold rates. Various states across India have associations, such as the Jewellers and Diamond Traders Association Tamil Nadu, that set local gold prices.</p>
        </section>

        <section>
            <h2 class="lg:text-xl md:text-md text-sm font-semibold text-gray-800 mt-8">3. Purchase Price</h2>
            <p class="lg:text-lg md:text-md text-sm text-gray-600 mt-2">The price at which jewellers buy gold significantly affects the price they charge consumers. When gold is purchased in bulk at lower prices, jewellers can offer gold at more competitive rates. The source of gold also plays a role in the pricing.</p>
        </section>

        <section>
            <h2 class="lg:text-xl md:text  font-semibold text-gray-800 mt-8">4. Central Bank Actions</h2>
            <p class="text-lg text-gray-600 mt-2">The actions of central banks—who hold vast reserves of gold—can influence market prices. When central banks purchase gold, demand increases and prices typically rise. Conversely, when central banks sell gold, demand decreases and prices generally fall.</p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mt-8">5. Currency Fluctuation</h2>
            <p class="text-lg text-gray-600 mt-2">The strength of a currency can influence the price of gold. A stronger domestic currency can lower gold prices for foreign buyers, which may lead to higher demand and higher prices in the market.</p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mt-8">6. Quantity of Gold</h2>
            <p class="text-lg text-gray-600 mt-2">Regional variations in demand, such as South India’s contribution of almost 40% of India’s gold imports, affect gold prices. When demand is high in specific regions, prices tend to increase in those areas.</p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mt-8">7. Seasonal Demand in India</h2>
            <p class="text-lg text-gray-600 mt-2">Gold prices tend to fluctuate with seasonal demand, especially during wedding seasons, festivals, and other cultural events. During these times, there is often a spike in the purchase of gold jewelry and coins.</p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mt-8">8. Market Conditions</h2>
            <p class="text-lg text-gray-600 mt-2">Gold prices are influenced by global market conditions. When gold prices rise in international markets, they generally have a corresponding effect on domestic prices.</p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mt-8">9. Production Costs</h2>
            <p class="text-lg text-gray-600 mt-2">The cost of mining gold impacts its overall price. When mining operations face higher production costs, these expenses are passed on to consumers, resulting in higher gold prices.</p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mt-8">10. Transport Costs</h2>
            <p class="text-lg text-gray-600 mt-2">Gold’s physical transportation involves significant costs, including fuel, security, and logistics. In countries like India, which are major gold importers, transportation costs add to the overall price of gold.</p>
        </section>
</div>
  
<div class="max-w-4xl mx-auto px-4 py-8">
<header>
                <h1 class="text-3xl font-semibold text-gray-800 mb-6">How does GST apply to gold?</h1>
                <p class="text-lg text-gray-600">The Goods and Services Tax (GST) affects gold in several ways, both directly and indirectly, depending on the form of gold and the purpose of purchase. Here's a breakdown:</p>
</header>
    
<section class="mt-8">
<h2 class="text-2xl font-semibold text-gray-800">Direct impact:</h2>
<div class="mt-4">
                    <h3 class="text-xl font-semibold text-gray-800">GST on gold purchase:</h3>
                    <p class="text-lg text-gray-600 mt-2">A flat 3% GST is levied on the gold value itself, whether it's in the form of bars, coins, or jewellery. This is considered lower than most other goods and services.</p>
</div>
    
<div class="mt-4">
                    <h3 class="text-xl font-semibold text-gray-800">Making charges:</h3>
                    <p class="text-lg text-gray-600 mt-2">For jewellery, an additional 5% GST is charged on the making charges separately.</p>
</div>
    
<div class="mt-4">
                    <h3 class="text-xl font-semibold text-gray-800">Impact on price:</h3>
                    <p class="text-lg text-gray-600 mt-2">Overall, the price of gold has increased slightly due to the combined effect of both 3% and 5% GST.</p>
</div>
</section>
    
<section class="mt-8">
                <h2 class="text-2xl font-semibold text-gray-800">Indirect impact:</h2>
                <div class="mt-4">
                    <h3 class="text-xl font-semibold text-gray-800">Import duty:</h3>
                    <p class="text-lg text-gray-600 mt-2">Imported gold bears a 10% customs duty in addition to the 3% GST. This has made importing gold more expensive, impacting some segments of the industry.</p>
                </div>
    
                <div class="mt-4">
                    <h3 class="text-xl font-semibold text-gray-800">Formalisation of trade:</h3>
                    <p class="text-lg text-gray-600 mt-2">GST has brought the gold industry under a more formal tax regime, potentially reducing tax evasion and black market activity. However, this might have also impacted some small informal players.</p>
                </div>
</section>
</div>
    
<div class="text-xs md:text-sm">
            <h1>What is the Hottest Jewellery Trend?</h1>
            <p>
              Recently, there has been a resurgence in the popularity of vintage and antique jewellery. The latest trend in the jewellery world is all about unique pieces with a rich history. Antique or heirloom jewellery is having a moment. Another hot trend is lightweight jewellery. Let's explore jewellery with a history first.
            </p>
          
            <h2>Heirloom or Antique Jewellery</h2>
            <p>
              The allure of these pieces lies in their distinctive backstories. Imagine wearing a pair of diamond stud earrings that once graced your grandmother's ears, or a pendant that was a cherished possession of your great-aunt. These heirloom pieces are not just accessories; they represent a slice of personal history, brimming with character and charm.
            </p>
            <p>
              Antique jewellery invites you to blend different eras and styles, allowing you to create a look that's uniquely yours. For instance, you could combine the elegance of Antique Sun Diamond Stud Earrings in 18K white gold with the charm of an Antique Sun Diamond Pendant to achieve a classic yet contemporary vintage vibe.
            </p>
            <p>
              Whether you're searching for a unique piece of jewellery for yourself or seeking a special gift for someone else, antique jewellery is an exceptional option that tells a story and adds timeless elegance to any collection.
            </p>
          </div>
          
<div class="max-w-7xl mx-auto p-6">
  <div class="bg-[#F6F3F9] p-6 rounded-lg">
      <h1 class="lg:text-3xl md:text-xl text-sm font-bold mb-4">How to Check the Purity of Gold</h1>
      
      <p class="mb-4">
          Ensuring the purity of your gold is essential to getting the best value for your investment. Here are some effective methods to check the purity of gold:
      </p>
      
      <h2 class="lg:text-2xl md:text-xl text-sm font-semibold mt-6">Methods to Check Gold Purity</h2>
      
      <ul class="list-disc list-inside space-y-4 mt-4">
          <li>
              <strong>Gold Testing Kit:</strong> 
              A popular method involves using a gold testing kit that contains different acids. Scratch a small amount of your gold onto a testing stone and apply a drop of the acid. If the acid changes color, it indicates that your gold is not pure.
          </li>
          <li>
              <strong>Magnifying Glass:</strong> 
              Use a magnifying glass to inspect your gold closely. Look for any dark spots or streaks; their presence suggests that the gold may not be pure.
          </li>
          <li>
              <strong>Professional Testing:</strong> 
              For the most accurate results, consider taking your gold to a professional jeweler or assay office. While this method may be more expensive, it ensures precise testing of your gold's purity.
          </li>
      </ul>

      <p class="mt-4">
          Regardless of the method you choose, checking the purity of your gold is crucial for making informed purchasing decisions and maximizing your investment.
      </p>
  </div>
</div>

<div class="max-w-7xl mx-auto p-6">
  <div class="bg-[#F6F3F9] p-6 rounded-lg">
      <h1 class="lg:text-3xl md:text-xl text-sm font-bold mb-4">A Guide to Buying Gold Online</h1>

      <p class="mb-4">
          Buying gold online offers greater convenience without compromising quality. Retailers like CaratLane provide Hallmarked gold to ensure that you receive products meeting the highest standards.
      </p>

      <p class="mb-4">
          While there are many factors to consider when purchasing gold, the right research and guidance can help you make a safe and secure purchase.
      </p>

      <h2 class="lg:text-2xl md:text-xl text-sm font-semibold mt-6">Steps to Buying Gold Online</h2>

      <ol class="list-decimal list-inside space-y-4 mt-4">
          <li>
              <strong>Research the Gold Market:</strong> 
              Understand the different types of gold available. Whether you're interested in gold coins or jewellery, knowing your options is crucial.
          </li>
          <li>
              <strong>Find a Reputable Dealer:</strong>
              Look for dealers who prioritize security and transparency. Ensure they have a BIS certification and check online customer reviews for reliability.
          </li>
          <li>
              <strong>Choose Your Payment Method:</strong>
              Decide how you want to pay. Options typically include wire transfers, cash, or credit/debit cards.
          </li>
          <li>
              <strong>Inspect Upon Delivery:</strong>
              Once your gold arrives, carefully inspect it to ensure it matches your order and is free of damage. Look for dealers that offer a return policy, like the 15-day return policy from CaratLane.
          </li>
      </ol>

      <p class="mt-4">
          By following these steps, you can confidently purchase gold online while ensuring quality and security.
      </p>
  </div>
</div>
<div class="max-w-7xl mx-auto p-6">
  <section class="bg-[#F6F3F9] p-6 rounded-lg ">
      <h1 class="lg:text-3xl md:text-xl text-sm font-bold mb-4">Keep Your Gold Safe by Following These Steps</h1>
      <p class="mb-4">
          Buying gold is a significant part of our culture and is considered one of the safer investments. Once your gold has reached your hands, ensuring its security is essential. Here are some steps to keep your gold safe and secure:
      </p>
      <ol class="list-decimal list-inside space-y-4 mt-4 text-sm">
          <li>
              <strong>Get a Home Safe:</strong> Investing in a home safe is one of the best ways to keep your gold secure. A robust safe is tough to break into and will deter potential thieves.
          </li>
          <li>
              <strong>Use a Safety Deposit Box:</strong> If you don’t have a home safe, consider storing your gold in a safety deposit box at the bank. This is a secure option for safeguarding your assets.
          </li>
          <li>
              <strong>Choose a Safe Location at Home:</strong> If you prefer keeping your gold at home, store it in a locked drawer or closet. Ensure that the location is not obvious to others.
          </li>
          <li>
              <strong>Insure Your Gold:</strong> Obtaining gold insurance protects your investment against fire, natural disasters, theft, or loss, providing peace of mind.
          </li>
          <li>
              <strong>Invest in Digi Gold:</strong> Digi Gold offers a modern approach to buying and storing gold digitally. It eliminates the risks associated with physical storage and allows easy access to your investment through online platforms.
          </li>
      </ol>
      <p class="mt-4 text-sm">
          By following these steps, you can keep your gold safe and protect your investment for years to come.
      </p>
  </section>
</div>

<div class="max-w-7xl mx-auto p-6">
  <section class="bg-[#F6F3F9] p-6 rounded-lg">
      <h1 class="lg:text-3xl md:text-xl text-sm font-bold mb-6">Frequently Asked Questions</h1>

      <div class="space-y-6">
          <!-- FAQ 1 -->
          <div>
              <h2 class="text-xs md:text-md font-semibold">Is 916 gold 22k or 24k?</h2>
              <p>916 denotes the purity of gold in the final product, meaning it contains 91.6 grams of pure gold in a 100-gram alloy. So, 916 gold is 91.6% pure gold (22K).</p>
          </div>

          <!-- FAQ 2 -->
          <div>
              <h2 class="text-xs md:text-md font-semibold">Who imports gold in India?</h2>
              <p>India imports nearly all of its gold from abroad. Major importers include:</p>
              <ul class="list-disc list-inside ml-6">
                  <li>Minerals and Metal Trading Corporation of India</li>
                  <li>ICICI Bank</li>
                  <li>HDFC Bank</li>
                  <li>State Bank of India</li>
                  <li>Union Bank of India</li>
                  <li>Bank of Baroda</li>
                  <li>Punjab National Bank</li>
              </ul>
          </div>

          <!-- FAQ 3 -->
          <div>
              <h2 class="text-xs md:text-md font-semibold">How to invest in Gold?</h2>
              <p>Gold can be purchased from various sources, including online dealers, jewellery stores, and banks. Investment options include:</p>
              <ul class="list-disc list-inside ml-6">
                  <li>Gold bars or coins</li>
                  <li>Stocks in gold mining companies</li>
                  <li>Gold mutual funds</li>
                  <li>Digi Gold for digital investments</li>
              </ul>
          </div>

          <!-- FAQ 4 -->
          <div>
              <h2 class=" font-semibold text-xs md:text-md">Is inflation a big determinant of gold rates in India?</h2>
              <p>Yes, inflation significantly impacts gold prices. Generally, when inflation is high, gold prices rise as it is viewed as a hedge against inflation.</p>
          </div>

          <!-- FAQ 5 -->
          <div>
              <h2 class=" font-semibold text-xs md:text-md">Where is gold cheapest in India?</h2>
              <p>Gold is usually cheapest in Kerala, followed by Karnataka, while cities like Delhi, Mumbai, Hyderabad, and Kolkata often have higher prices.</p>
          </div>

          <!-- FAQ 6 -->
          <div>
              <h2 class=" font-semibold text-xs md:text-md">What is the best time to purchase gold?</h2>
              <p>The ideal time to purchase gold is when prices are low, typically during economic downturns or when inflation is high.</p>
          </div>

          <!-- FAQ 7 -->
          <div>
              <h2 class=" font-semibold text-xs md:text-md">Who determines the gold rate today?</h2>
              <p>The Indian Bullion Jewellers Association (IBJA) determines the daily gold rates based on market conditions and supply-demand dynamics.</p>
          </div>

          <!-- FAQ 8 -->
          <div>
              <h2 class=" font-semibold text-xs md:text-md">Where to Buy Gold?</h2>
              <p>You can buy gold either in-store or online. CaratLane offers an extensive collection with the benefits of both options.</p>

              <h3 class="font-semibold mt-4">1. In-Store Gold Buying</h3>
              <ol class="list-decimal list-inside ml-6 text-xs md:text-md">
                  <li>Locate a CaratLane Store using the store locator.</li>
                  <li>Visit the store to browse the collection.</li>
                  <li>Seek assistance from knowledgeable staff.</li>
                  <li>Check for ongoing promotions.</li>
                  <li>Make your purchase and take it home.</li>
              </ol>

              <h3 class="font-semibold mt-4 text-md">2. Buying Gold Online</h3>
              <ol class="list-decimal list-inside ml-6 text-xs md:text-sm">
                  <li>Visit the CaratLane website.</li>
                  <li>Explore the collection and view detailed information.</li>
                  <li>Read customer reviews before adding items to your cart.</li>
                  <li>Choose your payment options and complete the secure transaction.</li>
                  <li>Opt for home delivery and enjoy the 15-day return policy.</li>
              </ol>
          </div>
      </div>
  </section>
</div>



</div>

    <!-- Right Sidebar: City Gold Rates -->
<div class="hidden lg:block lg:col-span-1 sticky top-0  right-0 mt-8 w-3/4">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-purple-900 mb-4">Gold Rates in Different Cities</h2>
            <div class="grid gap-4">
                <!-- City Card Example -->
                <a href="#" class="block p-4 hover:bg-gray-100 rounded-lg transition-colors flex items-center justify-between">
                    <span>Gold Rate Today in Bangalore</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                <!-- Additional city links -->
                <a href="#" class="block p-4 hover:bg-gray-100 rounded-lg transition-colors flex items-center justify-between">
                    <span>Gold Rate Today in Delhi</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                <a href="#" class="block p-4 hover:bg-gray-100 rounded-lg transition-colors flex items-center justify-between">
                    <span>Gold Rate Today in Mumbai</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                <!-- City Card Example -->
                <a href="#" class="block p-4 hover:bg-gray-100 rounded-lg transition-colors flex items-center justify-between">
                  <span>Gold Rate Today in Bangalore</span>
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
              </a>
              <!-- Additional city links -->
              <a href="#" class="block p-4 hover:bg-gray-100 rounded-lg transition-colors flex items-center justify-between">
                  <span>Gold Rate Today in Delhi</span>
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
              </a>
              <a href="#" class="block p-4 hover:bg-gray-100 rounded-lg transition-colors flex items-center justify-between">
                  <span>Gold Rate Today in Mumbai</span>
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
              </a>
              <!-- City Card Example -->
              <a href="#" class="block p-4 hover:bg-gray-100 rounded-lg transition-colors flex items-center justify-between">
                <span>Gold Rate Today in Bangalore</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            <!-- Additional city links -->
            <a href="#" class="block p-4 hover:bg-gray-100 rounded-lg transition-colors flex items-center justify-between">
                <span>Gold Rate Today in Delhi</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            <a href="#" class="block p-4 hover:bg-gray-100 rounded-lg transition-colors flex items-center justify-between">
                <span>Gold Rate Today in Mumbai</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            <!-- City Card Example -->
            <a href="#" class="block p-4 hover:bg-gray-100 rounded-lg transition-colors flex items-center justify-between">
              <span>Gold Rate Today in Bangalore</span>
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
          </a>
          <!-- Additional city links -->
          <a href="#" class="block p-4 hover:bg-gray-100 rounded-lg transition-colors flex items-center justify-between">
              <span>Gold Rate Today in Delhi</span>
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
          </a>
          <a href="#" class="block p-4 hover:bg-gray-100 rounded-lg transition-colors flex items-center justify-between">
              <span>Gold Rate Today in Mumbai</span>
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
          </a>
                <!-- Additional cities can be added here -->
            </div>
        </div>
</div>
</div>

@endsection
