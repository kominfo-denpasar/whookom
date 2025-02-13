@extends('front.layouts.app')

@section('content')
    <!-- <section class="is-title-bar">
                             <div class="flex flex-col items-center justify-between space-y-6 md:flex-row md:space-y-0">
                              <ul>
                               <li>Admin</li>
                               <li>Dashboard</li>
                              </ul>
                              <a
                               href="https://github.com/justboil/admin-one-tailwind"
                               target="_blank"
                               class="button blue">
                               <span class="icon">
                                <i class="mdi mdi-github-circle"></i>
                               </span>
                               <span>GitHub</span>
                              </a>
                             </div>
                            </section> -->

    <section
        class="relative bg-[url(https://images.unsplash.com/photo-1604014237800-1c9102c219da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80)] bg-cover bg-center bg-no-repeat">

        <div
            class="absolute inset-0 bg-white/75 lg:bg-transparent lg:from-white/95 lg:to-white/25 lg:bg-gradient-to-r sm:bg-gradient-to-l">
        </div>

        <div class="relative max-w-screen-xl px-4 py-32 mx-auto sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
            <div class="max-w-xl ltr:sm:text-left rtl:sm:text-right">
                <h1 class="text-3xl font-extrabold sm:text-5xl">
                    Denpasar
                    <strong class="block font-extrabold text-rose-700"> Menyama Bagia. </strong>
                </h1>

                <p class="max-w-lg mt-4 sm:text-xl/relaxed">
                    {{ trans('front.intro') }}
                </p>

                <div class="flex flex-wrap gap-4 mt-8 text-center">
                    <a href="{{ url('/survei') }}"
                        class="block w-full px-12 py-3 text-sm font-medium text-white rounded shadow bg-rose-600 hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
                        {{ trans('front.get_started') }}
                    </a>
                    <a href="{{ url('/tentang') }}"
                        class="block w-full px-12 py-3 text-sm font-medium bg-white rounded shadow text-rose-600 hover:text-rose-700 focus:outline-none focus:ring active:text-rose-500 sm:w-auto">
                        {{ trans('front.learn_more') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section main-section">

        <div class="w-full bg-white">

            <div class="px-6 py-8 mx-auto max-w-7xl lg:px-8">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ trans('front.blog_title') }}
                    </h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">
                        {{ trans('front.blog_desc') }}
                    </p>
                </div>
                <div
                    class="grid max-w-2xl grid-cols-1 gap-8 mx-auto mt-8 auto-rows-fr sm:mt-12 lg:mx-0 lg:max-w-none lg:grid-cols-3 ">
                    <!-- First blog post -->
                    <article
                        class="relative flex flex-col justify-end px-8 py-8 pb-8 overflow-hidden bg-gray-900 isolate rounded-2xl dark:bg-gray-700 pt-80 sm:pt-48 lg:pt-80">
                        <img src="https://images.unsplash.com/photo-1677442135703-1787eea5ce01?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxhaXxlbnwwfDB8fHwxNzEyNzUzMTQ4fDA&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="" class="absolute inset-0 object-cover w-full h-full -z-10">
                        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                        <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        <div class="flex flex-wrap items-center overflow-hidden text-sm leading-6 text-gray-300 gap-y-1">
                            <time datetime="2023-10-11" class="mr-8">Oct 11, 2023</time>
                            <div class="flex items-center -ml-4 gap-x-4"><svg viewBox="0 0 2 2"
                                    class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                                    <circle cx="1" cy="1" r="1"></circle>
                                </svg>
                                <div class="flex gap-x-2.5">
                                    <img src="https://randomuser.me/api/portraits/men/2.jpg" alt=""
                                        class="flex-none w-6 h-6 rounded-full bg-white/10">John
                                </div>
                            </div>
                        </div>
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
                            <a href="/tech-blog/post1"><span class="absolute inset-0"></span>The Future of Artificial
                                Intelligence: Trends and Challenges</a>
                        </h3>
                    </article>
                    <!-- Second blog post -->
                    <article
                        class="relative flex flex-col justify-end px-8 py-8 pb-8 overflow-hidden bg-gray-900 isolate rounded-2xl dark:bg-gray-700 pt-80 sm:pt-48 lg:pt-80">
                        <img src="https://images.unsplash.com/photo-1639322537228-f710d846310a?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxibG9jayUyMGNoYWlufGVufDB8MHx8fDE3MTI3NTMxNjd8MA&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="" class="absolute inset-0 object-cover w-full h-full -z-10">
                        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                        <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        <div class="flex flex-wrap items-center overflow-hidden text-sm leading-6 text-gray-300 gap-y-1">
                            <time datetime="2023-09-25" class="mr-8">Sept 25, 2023</time>
                            <div class="flex items-center -ml-4 gap-x-4"><svg viewBox="0 0 2 2"
                                    class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                                    <circle cx="1" cy="1" r="1"></circle>
                                </svg>
                                <div class="flex gap-x-2.5">
                                    <img src="https://randomuser.me/api/portraits/women/2.jpg" alt=""
                                        class="flex-none w-6 h-6 rounded-full bg-white/10">Jane
                                </div>
                            </div>
                        </div>
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
                            <a href="/tech-blog/post2"><span class="absolute inset-0"></span>The Rise of Blockchain
                                Technology:
                                A Comprehensive Guide</a>
                        </h3>
                    </article>
                    <!-- Third blog post -->
                    <article
                        class="relative flex flex-col justify-end px-8 py-8 pb-8 overflow-hidden bg-gray-900 isolate rounded-2xl dark:bg-gray-700 pt-80 sm:pt-48 lg:pt-80">
                        <img src="https://images.unsplash.com/photo-1666112835156-c65bb806ac73?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxNXx8cXVhbnR1bSUyMGNvbXB1dGluZ3xlbnwwfDB8fHwxNzEyNzUzMTk2fDA&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="" class="absolute inset-0 object-cover w-full h-full -z-10">
                        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                        <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        <div class="flex flex-wrap items-center overflow-hidden text-sm leading-6 text-gray-300 gap-y-1">
                            <time datetime="2023-09-24" class="mr-8">Sept 24, 2023</time>
                            <div class="flex items-center -ml-4 gap-x-4"><svg viewBox="0 0 2 2"
                                    class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                                    <circle cx="1" cy="1" r="1"></circle>
                                </svg>
                                <div class="flex gap-x-2.5">
                                    <img src="https://randomuser.me/api/portraits/men/4.jpg" alt=""
                                        class="flex-none w-6 h-6 rounded-full bg-white/10">Michael
                                </div>
                            </div>
                        </div>
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
                            <a href="/tech-blog/post3"><span class="absolute inset-0"></span>How Quantum Computing Will
                                Revolutionize Data Security</a>
                        </h3>
                    </article>
                    <!-- More blog posts can be added similarly -->
                </div>
            </div>

        </div>
    </section>


    <section class="bg-white">
        <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8 lg:py-16">
            <h2 class="text-3xl font-bold tracking-tight text-center text-gray-900 sm:text-4xl">
                {{ trans('front.titlepsi') }}
            </h2>
            <p class="mt-2 text-lg leading-8 text-center text-gray-600">
                {{ trans('front.psi_desc') }}
            </p>

            <div class="mt-8 [column-fill:_balance] sm:columns-2 sm:gap-6 lg:columns-3 lg:gap-8">
                <div class="mb-8 sm:break-inside-avoid">
                    <blockquote class="p-6 rounded-lg shadow-sm bg-gray-50 sm:p-8">
                        <div class="flex items-center gap-4">
                            <img alt=""
                                src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                                class="object-cover rounded-full" />

                            {{-- <div>
                                <div class="flex justify-center gap-0.5 text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>

                            </div> --}}
                        </div>
                        <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>

                        <p class="mt-4 text-gray-700">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum
                            incidunt, a consequuntur recusandae ab saepe illo est quia obcaecati neque
                            quibusdam eius accusamus error officiis atque voluptates magnam!
                        </p>
                    </blockquote>
                </div>

                <div class="mb-8 sm:break-inside-avoid">
                    <blockquote class="p-6 rounded-lg shadow-sm bg-gray-50 sm:p-8">
                        <div class="flex items-center gap-4">
                            <img alt=""
                                src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                                class="object-cover rounded-full" />

                            {{-- <div>
                                <div class="flex justify-center gap-0.5 text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>

                            </div> --}}
                        </div>
                        <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>

                        <p class="mt-4 text-gray-700">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum
                            incidunt, a consequuntur recusandae ab saepe illo est quia obcaecati neque
                            quibusdam eius accusamus error officiis atque voluptates magnam!
                        </p>
                    </blockquote>
                </div>

                <div class="mb-8 sm:break-inside-avoid">
                    <blockquote class="p-6 rounded-lg shadow-sm bg-gray-50 sm:p-8">
                        <div class="flex items-center gap-4">
                            <img alt=""
                                src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                                class="object-cover rounded-full" />

                            {{-- <div>
                                <div class="flex justify-center gap-0.5 text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>

                            </div> --}}
                        </div>
                        <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>

                        <p class="mt-4 text-gray-700">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum
                            incidunt, a consequuntur recusandae ab saepe illo est quia obcaecati neque
                            quibusdam eius accusamus error officiis atque voluptates magnam!
                        </p>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
@endsection
