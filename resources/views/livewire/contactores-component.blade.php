<div class="p-4">
    <div class="max-w-2xl mx-auto mt-16 mb-10">
        <form class="flex items-center">
            <label for="voice-search" class="sr-only">Buscar</label>
            <div class="relative w-full">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="voice-search" wire:model="search" class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                <button type="button" class="flex absolute inset-y-0 right-0 items-center pr-3">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7 4a3 3 0 016 0v4a3 3 0 11-6 0V4zm4 10.93A7.001 7.001 0 0017 8a1 1 0 10-2 0A5 5 0 015 8a1 1 0 00-2 0 7.001 7.001 0 006 6.93V17H6a1 1 0 100 2h8a1 1 0 100-2h-3v-2.07z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <button type="submit" class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg class="mr-2 -ml-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>Buscar</button>
        </form>
    </div>

    @if ($contactores->count())


    <table class="min-w-full border-collapse block lg:table mt-44">
		<thead class="block lg:table-header-group">
			<tr class="border border-grey-500 lg:border-none block lg:table-row absolute -top-full lg:top-auto -left-full lg:left-auto  lg:relative ">
				<th class="bg-gray-600 p-2 text-white font-bold lg:border lg:border-grey-500 text-left block lg:table-cell">Codigo</th>
				<th class="bg-gray-600 p-2 text-white font-bold lg:border lg:border-grey-500 text-left block lg:table-cell">Referencia</th>
				<th class="bg-gray-600 p-2 text-white font-bold lg:border lg:border-grey-500 text-left block lg:table-cell">Voltaje</th>
				<th class="bg-gray-600 p-2 text-white font-bold lg:border lg:border-grey-500 text-left block lg:table-cell">Cod/Bobina</th>
				<th class="bg-gray-600 p-2 text-white font-bold lg:border lg:border-grey-500 text-left block lg:table-cell">Refe/Bobina</th>
                <th class="bg-gray-600 p-2 text-white font-bold lg:border lg:border-grey-500 text-left block lg:table-cell">Cod/Alter1</th>
				<th class="bg-gray-600 p-2 text-white font-bold lg:border lg:border-grey-500 text-left block lg:table-cell">Refe/Alter1</th>
                <th class="bg-gray-600 p-2 text-white font-bold lg:border lg:border-grey-500 text-left block lg:table-cell">Cod/Alter2</th>
				<th class="bg-gray-600 p-2 text-white font-bold lg:border lg:border-grey-500 text-left block lg:table-cell">Refe/Alter2</th>
				<th class="bg-gray-600 p-2 text-white font-bold lg:border lg:border-grey-500 text-left block lg:table-cell">Actions</th>
			</tr>
		</thead>
		<tbody class="block lg:table-row-group">
            @foreach ($contactores as $contactor )

			<tr class="bg-gray-300 border border-grey-500 lg:border-none block lg:table-row">
                <td class="p-2 lg:border lg:border-grey-500 text-left block lg:table-cell"><span class="inline-block w-1/3 lg:hidden font-bold">Codigo</span>{{$contactor->codigo}}</td>
				<td class="p-2 lg:border lg:border-grey-500 text-left block lg:table-cell"><span class="inline-block w-1/3 lg:hidden font-bold">Referencia</span>{{$contactor->referencia}}</td>
				<td class="p-2 lg:border lg:border-grey-500 text-left block lg:table-cell"><span class="inline-block w-1/3 lg:hidden font-bold">Voltatje</span>{{$contactor->voltaje}}</td>
				<td class="p-2 lg:border lg:border-grey-500 text-left block lg:table-cell"><span class="inline-block w-1/3 lg:hidden font-bold">Cod/Bobina</span>{{$contactor->bobina}}</td>
				<td class="p-2 lg:border lg:border-grey-500 text-left block lg:table-cell"><span class="inline-block w-1/3 lg:hidden font-bold">Refe/Bobina</span>{{$contactor->refe_bobina}}</td>
				<td class="p-2 lg:border lg:border-grey-500 text-left block lg:table-cell"><span class="inline-block w-1/3 lg:hidden font-bold">Cod/Alter1</span>{{$contactor->alternativa1}}</td>
				<td class="p-2 lg:border lg:border-grey-500 text-left block lg:table-cell"><span class="inline-block w-1/3 lg:hidden font-bold">Ref/Alter1</span>{{$contactor->referencia1}}</td>
				<td class="p-2 lg:border lg:border-grey-500 text-left block lg:table-cell"><span class="inline-block w-1/3 lg:hidden font-bold">Cod/Alter2</span>{{$contactor->alternativa2}}</td>
				<td class="p-2 lg:border lg:border-grey-500 text-left block lg:table-cell"><span class="inline-block w-1/3 lg:hidden font-bold">Cod/Alter1</span>{{$contactor->alternativa2}}</td>
				<td class="p-2 lg:border lg:border-grey-500 text-left block lg:table-cell">
                    <span class="inline-block w-1/3 lg:hidden font-bold">Actions</span>
					<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Edit</button>
					<button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button>
				</td>
			</tr>
            @endforeach
		</tbody>
	</table>
    @else
    <div class="flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700 text-center" role="alert">
        <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <div>
            <span class="font-medium">Alerta!</span>Este codigo no existe.
        </div>
    </div>
    @endif
</div>
