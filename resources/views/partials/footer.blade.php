{{-- https://tailwindcomponents.com/component/responsive-footer-2 --}}

<!-- This example requires Tailwind CSS v2.0+ -->
<footer class="bg-gray-800 pt-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mt-10 flex flex-col justify-between">
            <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-10 md:gap-y-10">
                <div class="flex flex-col">
                    <div class="flex-shrink-0">
                        <div>
                            <dt class="text-xs uppercase text-gray-400 font-medium mb-6">Company</dt>
                            <a href="#"
                                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">Pricing
                            </a>
                            <a href="#"
                                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">How
                                it Works
                            </a>
                            <a href="#"
                                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">Give
                                Us
                                Feedback
                            </a>
                            <a href="#"
                                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">Contact
                                Us
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex-shrink-0">
                        <div>
                            <dt class="text-xs uppercase text-gray-400 font-medium mb-6">Resources</dt>
                            <a href="#"
                                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">Browse
                                Countries
                            </a>
                            <a href="#"
                                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">Student
                                Support
                            </a>
                            <a href="#"
                                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">Travel
                                Guarantee
                            </a>
                            <a href="#"
                                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">Booking
                                FAQs
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex-shrink-0">
                        <div>
                            <dt class="text-xs uppercase text-gray-400 font-medium mb-6">Legal</dt>
                            <a href="#"
                                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">Terms
                                of Service

                            </a>
                            <a href={{ 'privacy-policy' }}
                                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">Privacy
                                Policy
                            </a>
                            <a href="#"
                                class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">Cookie
                                Policy
                            </a>
                        </div>
                    </div>
                </div>
            </dl>
        </div>
        <!-- Copyright Bar -->
        <div class="pt-2">
            <div class="flex pb-5 px-3 m-auto pt-5 
                border-t border-gray-500 text-gray-400 text-sm 
                flex-col md:flex-row">
                <div class="mt-2">
                    © Copyright Autocomplete App. All Rights Reserved.
                </div>

                <!-- Required Unicons (if you want) -->
                <div class="flex pb-5 px-3 m-auto pt-3 text-gray-400 text-sm 
                flex-col md:flex-row">
                    <a href="#" class="w-6 mx-1" target="_blank">
                        <i class="uil uil-facebook-f"></i>
                    </a>
                    <a href="#" class="w-6 mx-1" target="_blank">
                        <i class="uil uil-twitter-alt"></i>
                    </a>
                    <a href="#" class="w-6 mx-1" target="_blank">
                        <i class="uil uil-youtube"></i>
                    </a>
                    <a href="#" class="w-6 mx-1" target="_blank">
                        <i class="uil uil-linkedin"></i>
                    </a>
                    <a href="#" class="w-6 mx-1" target="_blank">
                        <i class="uil uil-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
</footer>
