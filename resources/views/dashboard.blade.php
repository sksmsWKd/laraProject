{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout> --}}



<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('notices') }}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" id="visibleTable">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">



                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Name
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Title
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Status
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Role
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full"
                                                        src="https://cdn.sstatic.net/Img/teams/teams-illo-free-sidebar-promo.svg?v=47faa659a05e"
                                                        alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        jane
                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                        jane.cooper@example.com
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Regional Paradigm Technician
                                            </div>
                                            <div class="text-sm text-gray-500">Optimization</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Active
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            Admin
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>

                                    <!-- More people... -->
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-secondary">Secondary</button>
                                    <button type="button" class="btn btn-success">Success</button>
                                    <button type="button" class="btn btn-danger">Danger</button>
                                    <button type="button" class="btn btn-warning">Warning</button>
                                    <button type="button" class="btn btn-info">Info</button>
                                    <button type="button" class="btn btn-light">Light</button>



                                    <div class=" w-25 p-3">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                    class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANIAAADSCAMAAAAIR25wAAAAFVBMVEX////q5uEAAABwaGXnysJHQ0G2S0PHJ/6yAAAENElEQVR4nO3a64KjIAwF4NZ25/0fecdpgQAJglyN5/zpaBXy7WaoOn08EARBkJbZjjO7xNJoIZVVfAmdMlJVbWviQOJOXofUsJZVfr2UkXpNPpGli9S9QcazlJGGzTUOpY40tMXHTKaOxMxBPiG3v81w93eTO57byRzdjWNmYHZdlyQOT3Y7kvd6cKJ9OySlTm4RlSTxjf0tr5kiEnsySO2T7J6gw8TlwdvKI3VE3YVEF1x58lLSqNYDST51cVLiaOYyIRhozd+lxNHLkxLDirULJzMXft4PIJ1OXrl047jxoh0gVaaUJCz5UYLd7Kkg5aZ8eUgs44VTgXR6noEBafKwM+cGqenMIOUP3GXYmTODdIWZQbrCzIkrcbIkZd0vlU3ba727Eyl4yCPcL52vqh9IJUm8T/VeQcqZVBmp9yfHXUg9F/GO67edQZz4qqScPmhYwwjQXUjBszq/8eTTMqYac52skHSwkD+akcaBVJKE5jNl2Eq2OCVTjL3fVEiKUI2uT+0AM54IgFQ6+JznNn0eCFRdDzaZvM+oM5+tVV9nRyM1Kq2+EDUkkoqKVqOYKCR9wlwuCPFOmVjxYRSSciNctV85mkla2u6KJGEloG/bw4YXdy4XJKUW5f3NF4lw/7uQ5i9XJ5GSneBfGK+Zdsr7NyxJ7MdxUUYy9VnKvhFxKOvbde93kjQF46YHaW2Sv3S9zKZIsge934a03lqtlGR7yAlLSLMRfpSTfpNF+sYsDQt8rnrRT6JLxRHJgNxPa6jUkejFWkRiUS85a/SfMpL7vaZrdwXJukBq6aFlCBUWk+ah1JG2BOIAlXPKDJQ6UoEnVOWeMRqljFTMOZtxKJDWJ7UHCSNufkAqI7UHBSi6o+orr3cllbYde/yTxlzOE004QCeLZlIpiNT45PI5Yv9JuOUCqTPJNBXjYHk7C6RqT8ZHIj3G7BHqDxrPbY38lL0BKVxyyc4UI6w96kfmnwyk0yQhYbOx7fRjwjSmP1gfze1JbJf98BGWjyGgO5OYAj+qfJBDgQRSksR+zkSogJUAGRRIbUifUhM9F7GO8PT4rqDbkPI55dnHBukEibkWrwIlW3DAE3GFpIf47KGk+min+TIV8xZIrUg5HFe7V7kDGZZ3xgiQUlKAyvZsrm5buQ8CqSWquOmem1C7WxqYBQKkJqRMDyW5V0sSL2JBmkPa7DJBFgjxBgMkkDhSPohcb7uN41NGgUA6H5DWJ426VwKpjjQOpJJkUF1BIK1OGg8C6QxpNEgpKeMLNac9E9pOJenTen1AMzRaSTuqPccGJJBSqIwnCEUg+3AZpAVR7vEeSJ1IeU/lkhj6l5qpy4NCEqmlnLUJmAX+j7SR/L9Ven/7CuIzvoVHoHkWzSTbOYEuLE5oqS00To9C0l9cRUuswi2ikOSyYAvVBiQEQRAEQRAEaZT/yVRjgPb7YHcAAAAASUVORK5CYII="
                                                        alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100"
                                                        src="https://item.kakaocdn.net/do/a5ce3a8ba282e6a89c74cc84ff27aa35f43ad912ad8dd55b04db6a64cddaf76d"
                                                        alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANIAAADSCAMAAAAIR25wAAAAFVBMVEX////86c0AAADmpTf0varGUUDLxLYUTWzgAAAD6klEQVR4nO3b62LiIBAFYEOzvv8jbytCuN9mIMnknB+7VQkzX4skWvt6IQiCIAiCIAiCIIujcjm7sfGAdNU0dH43myTSQJtXX4vCSOSericTRuJs5CIwcaQ5DZwKE0eaWfYkljDSioKLdwuQhmssJa2qtOS7p+usqPItNb3YGXvR9AICSbmb7iPJF0P29t8/1dH5mtwRR4qqJkneGHMjGFkZnSvCH5Gk6A57F0jXICVAzt2VJzyBNBElnxR0VSlr+F9nzyYOUk/KEx/7QJTg4JBErUyIfJK7VPJrJnFwvPDSBbKV+SKfpO+KVlj9fAlS6QFq5JOCvSxzPeCPt2ewyv5YqssZ+aSjyaiTeovtbSan4IpI0sTJC1WnTi6ONH36MyoKJC1F5XYX/jrTSxyl1pBaLro5SizjfOstKLGaNKdW4eQ8OQJJtjzrZOdR3C5YJzuf5F+ZDh3s3mLsixCBpCNqLO4E5zWfDkh3IA3FRYF03RwokK4cgwLp2tEokAi1Vr3sX1NIJmnfFy3xiBRfMTHVEUpatCSCykr9/IbdJZT0QfFN6b4IKY76OcKJkkxifSPIabUy6q1TGdtZXihpZ9zJvQVVaPRv3PvtkXh6AKlpxtNJXxTbs2mYxPVsEkjylh4LK7Gg6uOm7XlySHbpbRuZ5Z1tdKuZGUHqbUPpC/LtExIqImlUZiRIfY18sm0HanD6LEnFMfv8m/dUK5m0BRlUZUjB+TcRXtBTSCRU8LRvCfe7H08h1XaKxBP+eOJ3gswbRSANkbbNvtOW34UTvbVb8iyS8XGkse7Gjvsx27kirkSQ7k4aRXUz/FvU7e9xpNmoaAcFaYjEgqqcyeyj+itF3CUeSSKzCpcc9qG/Ivp/e3+/5emkHl/UfYH0m2PeA0bbIkBqpSlv3oikv07MaY8CiYlUi6LMDVJAYkG5u7F3Z3akSh4CUlbFAjK/qKqP/OcmgwKJm2RAdVQE0iiQHkoioVxQQApmToIyKJASKBJp3yNS8oyTAYHUSiJdjdnPMqvy9gASMeQN4oB1k5JLFCRukgsrj2gDcSw7kEYTnmozr5cUx7IDiYZykxtCBwkkES9cGcP1I5JJOpuiwwYCaSKH9S+pzgaBdBcSGwekaSCQ7kBiBYE01HD5FS/7srs9KXzJUn/LgIWTLmM/UED8iUgk7X5mkpRbzmV5H/oggaSSEqgFIFMq+sQUESSS9HL+6nk+yay3JInx5YRAkvN3z/vUDd3MmFh4nBqpJO+MW3ho2Oge7oHMp6aZOSDdhdSegi3CR98oj5X7Hi6PQJJJofHmQ+d22B2BJARBEARBEARBEARBEARBkOb8BzfxX/zjOk5aAAAAAElFTkSuQmCC"
                                                        alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev " href="#carouselExampleIndicators"
                                                role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators"
                                                role="button" data-slide="next">
                                                <span class="carousel-control-next-icon " aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
<script>
    $('.carousel slide').carousel({
        interval: 10
    })
</script>
