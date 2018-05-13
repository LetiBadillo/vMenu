  <input class="form-control search form-control-dark w-100" type="text" placeholder="Buscar" aria-label="Buscar">
  <br>
  <table class="table results table-striped">
      <thead class="thead-dark">
                <tr>
                <th class="text-center">Paciente</th>
                <th class="text-center">Fecha</th>
                <th class="text-center" colspan="1"></th>
                </tr>
            </thead>
            <tbody>
                @if(count($consultations))
                @foreach($consultations as $consultation)
                <tr>
                <td>{{$consultation->patient->name}} {{$consultation->patient->last_name}}</td>
                <td class="text-center">{{$consultation->created_at}}</td>
                <td class="text-center">
                    <a class="nav-link" data-toggle="collapse" href="#c-{{$consultation->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Ver más
                            <span class="dropdown-toggle"></span>
                        </a>
                  </td>
                </tr>
                <tr class="collapse detail" id="c-{{$consultation->id}}">
                <td>Descripción: 
                    <p>{{$consultation->description}}<p></td>
                <td>Diagnósitico: 
                    <p>{{$consultation->diagnosed}}</p>
                </td>
                <td class="text-center"><a href="{{route('consultations.show', ['id'=>$consultation['id']])}}" class="btn btn-outline-secondary">Ver detalle completo &#10093</a></td>
                </tr>
                @endforeach
                <tr class="warning no-result">
                    <td class="text-center alert alert-danger" colspan="5">No hay consultas registradas</td>
                </tr>
                @else
                <tr>
                <td class="text-center alert alert-danger" colspan="5">No hay consultas registradas</td>
                </tr>
                @endif
            
            </tbody>
    </table>