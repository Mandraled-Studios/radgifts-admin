<x-app-layout>
    <x-slot:seo> 
        <x-seosnippet :title="$title" :metadesc="$metadesc" :canonical="$canonical" :keywords="$keywords"> </x-seosnippet>
    </x-slot>
    <section id="ms-accordian" class="pb-6">
        <figure class="about-banner h-56 relative mb-10" style="background-image: url({{asset('images/about-banner.png')}}); background-size:cover;">
            <div class="ms-container">
                <h1 class="text-white text-3xl md:text-4xl xl:text-5xl font-semibold mb-4 absolute bottom-4"> Frequently Asked Questions </h1>
            </div>
        </figure>
        <div class="ms-container">
            <div class="row">
                <div class="col">
                    <div class="tabs">
                        <div class="tab">
                            <input type="checkbox" id="chck1">
                            <label class="tab-label" for="chck1">Why Corporate gifting </label>
                            <div class="tab-content">
                                Corporate gifting is the gesture of gifting something tangible and valuable to employees(old and new),clients(existing and prospective) or any stakeholder within the business. Receiving a gift is always a joyous occasion and the concept of corporate gifting is no different. It makes the recipient feel appreciated and valued by the giver, who may be their employer or a business partner or a client. Options being endless, businesses can choose from a plethora of gifts such as gadgets, promotional t-shirts, drinkware, eco friendly gifts, personalised gift cards, food and beverage packs and luxury gifts, based on the occasion and the designation of the receiver. Corporate gifting goes above and beyond the usual awards and trophies that are given out each business year.
                            </div>
                        </div>
                        <div class="tab">
                            <input type="checkbox" id="chck2">
                            <label class="tab-label" for="chck2">What are the unique options we have with regards to customization?</label>
                            <div class="tab-content">
                                Creativity is seeing what others see and thinking what no one else ever thought. We love creative ideas; share them with us and we will try to make it a reality. Nevertheless, we use different technologies such as UV printing, Digital printing, screen printing, engraving, etching  and hand painting based on the nature of the product.
                            </div>
                        </div>
                        <div class="tab">
                            <input type="checkbox" id="chck3">
                            <label class="tab-label" for="chck3">Is there a minimum order quantity?</label>
                            <div class="tab-content">
                               We don't have a minimum order quanity, so you can customize even a single hamper to suit your needs.
                            </div>
                        </div>
                        <div class="tab">
                            <input type="checkbox" id="chck4">
                            <label class="tab-label" for="chck4">How can we choose the products based on a budget?
                            </label>
                            <div class="tab-content">
                                We have an array of budget friendly options that you can choose from. Email us your requirements and we will specially curate hampers that will fit your budget. 
    
                            </div>
                        </div>
                        <div class="tab">
                            <input type="checkbox" id="chck5">
                            <label class="tab-label" for="chck5">Do you help shipping the hamper across the globe?
                            </label>
                            <div class="tab-content">
                                We understand that companies are adapting to the ‘new normal’ as a result of the pandemic hence we ensure the hampers are delivered to each individual at their doorstep locally and globally. Give us the list (names, postal address and phone numbers) and we will take care of the fulfilment. Our transparent shipping process ensures a hassle-free operation and we make sure your goods are delivered safely to the right place at the right time.
                            </div>
                        </div>
                        <div class="tab">
                            <input type="checkbox" id="chck7">
                            <label class="tab-label" for="chck7">Do you have warehousing facilities? 
                            </label>
                            <div class="tab-content">
                                If you are thinking about where to stock all your hampers owing to space constraints or ‘work from home’ set up then worry not, we got you covered! We can stock them in our dedicated warehouse safe and sound and ship them out when the requirement arises.
                            </div>
                        </div>
                        <div class="tab">
                            <input type="checkbox" id="chck8">
                            <label class="tab-label" for="chck8">Is it possible to source products that are not listed on the website?
                            </label>
                            <div class="tab-content">
                                Email us the products and we will try our best to bring them to the table.
                            </div>
                        </div>
                        <div class="tab">
                            <input type="checkbox" id="chck10">
                            <label class="tab-label" for="chck10">How long does it take to fulfil the order?
                            </label>
                            <div class="tab-content">
                                We take utmost care with regards to meeting deadlines. Curating a hamper involves sourcing products from multiple vendors across locations. A minimum of 2 weeks time is what we would need to rack up the process. So allow us this time to make the gifting process seamless.
                            </div>
                        </div>
                        <div class="tab">
                            <input type="checkbox" id="chck9">
                            <label class="tab-label" for="chck9">Can we see the products physically before placing the order?
                            </label>
                            <div class="tab-content">
                                <p>Of course! Here is how it is done:</p>
                                <p>Step 1: Call/whats app us with your requirement.</p>
                                <p>Step 2: We will send out relevant options.</p>
                                <p>Step 3: Finalise the products along with customization.</p>
                                <p>Step 4: We will visit you to show the samples. Alternatively you can visit our store to check the samples.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [{
            "@type": "Question",
            "name": "Why Corporate gifting",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Corporate gifting is the gesture of gifting something tangible and valuable to employees(old and new),clients(existing and prospective) or any stakeholder within the business. Receiving a gift is always a joyous occasion and the concept of corporate gifting is no different. It makes the recipient feel appreciated and valued by the giver, who may be their employer or a business partner or a client. Options being endless, businesses can choose from a plethora of gifts such as gadgets, promotional t-shirts, drinkware, eco friendly gifts, personalised gift cards, food and beverage packs and luxury gifts, based on the occasion and the designation of the receiver. Corporate gifting goes above and beyond the usual awards and trophies that are given out each business year."
            }
          },{
            "@type": "Question",
            "name": "What are the unique options we have with regards to customization?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Creativity is seeing what others see and thinking what no one else ever thought. We love creative ideas; share them with us and we will try to make it a reality. Nevertheless, we use different technologies such as UV printing, Digital printing, screen printing, engraving, etching and hand painting based on the nature of the product."
            }
          },{
            "@type": "Question",
            "name": "Is there a minimum order quantity?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We don't have a minimum order quanity, so you can customize even a single hamper to suit your needs."
            }
          },{
            "@type": "Question",
            "name": "How can we choose the products based on a budget?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We have an array of budget friendly options that you can choose from. Email us your requirements and we will specially curate hampers that will fit your budget."
            }
          },{
            "@type": "Question",
            "name": "Do you help shipping the hamper across the globe?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We understand that companies are adapting to the ‘new normal’ as a result of the pandemic hence we ensure the hampers are delivered to each individual at their doorstep locally and globally. Give us the list (names, postal address and phone numbers) and we will take care of the fulfilment. Our transparent shipping process ensures a hassle-free operation and we make sure your goods are delivered safely to the right place at the right time."
            }
          },{
            "@type": "Question",
            "name": "Do you have warehousing facilities?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "If you are thinking about where to stock all your hampers owing to space constraints or ‘work from home’ set up then worry not, we got you covered! We can stock them in our dedicated warehouse safe and sound and ship them out when the requirement arises."
            }
          },{
            "@type": "Question",
            "name": "Is it possible to source products that are not listed on the website?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Email us the products and we will try our best to bring them to the table."
            }
          },{
            "@type": "Question",
            "name": "How long does it take to fulfil the order?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We take utmost care with regards to meeting deadlines. Curating a hamper involves sourcing products from multiple vendors across locations. A minimum of 2 weeks time is what we would need to rack up the process. So allow us this time to make the gifting process seamless."
            }
          },{
            "@type": "Question",
            "name": "Can we see the products physically before placing the order?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Of course! Here is how it is done:
        Step 1: Call/whats app us with your requirement.
        Step 2: We will send out relevant options.
        Step 3: Finalise the products along with customization.
        Step 4: We will visit you to show the samples. Alternatively you can visit our store to check the samples."
            }
          }]
        }
    </script>
        
    <style>
        /*------------accordian faq --------------*/
        #ms-accordian body {
            color: rgb(136 162 159 / 0.4);
            background: #ecf0f1;
            padding: 0 1em 1em;
        }
        
        #ms-accordian h1 {
            margin: 0;
            line-height: 2;
            text-align: center;
        }
        
        #ms-accordian h2 {
            margin: 0 0 .5em;
            font-weight: normal;
        }
        
        #ms-accordian input {
            position: absolute;
            opacity: 0;
            z-index: -1;
        }
        
        #ms-accordian .row {
            display: flex;
        }
        
        #ms-accordian .row .col {
            flex: 1;
        }
        
        #ms-accordian .row .col:last-child {
            margin-left: 1em;
        }
        
        /* Accordion styles */
        /* #ms-accordian .tabs {
            border-radius: 8px;
            overflow: hidden;            
            box-shadow: 0 4px 4px -2px rgba(0, 0, 0, 0.1);
        }*/ 
        
        #ms-accordian .tab {
            width: 100%;
            color: black;
            overflow: hidden;
            margin-bottom: 1rem;
        }
        
        #ms-accordian .tab-label {
            display: flex;
            justify-content: space-between;
            padding: 1em;
            background: rgb(136 162 159 / 0.2);
            font-weight: 500;
            cursor: pointer;
            /* Icon */;
        }
        
        #ms-accordian .tab-label:hover {
            background: rgb(136 162 159 / 77%);
        }
        
        #ms-accordian .tab-label::after {
            content: "\276F";
            width: 1em;
            height: 1em;
            text-align: center;
            transition: all .35s;
        }
        
        #ms-accordian .tab-content {
            max-height: 0;
            padding: 0 1em;
            color:black;
            background: white;
            transition: all .35s;
        }
        
        #ms-accordian .tab-close {
            display: flex;
            justify-content: flex-end;
            padding: 1em;
            font-size: 0.75em;
            background: rgb(136 162 159 / 77%);
            cursor: pointer;
        }
        
        #ms-accordian .tab-close:hover {
            background: rgb(136 162 159 / 77%);
        }
        
        #ms-accordian input:checked + .tab-label {
            background: rgb(136 162 159 / 77%);
        }
        
        #ms-accordian input:checked + .tab-label::after {
            transform: rotate(90deg);
        }
        
        #ms-accordian input:checked ~ .tab-content {
            max-height: 100vh;
            padding: 1em;
        }
        
    </style>
</x-app-layout>