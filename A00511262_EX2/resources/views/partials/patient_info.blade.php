<div class="card mb-4 box-shadow">
          <div class="card-header">
          <h4 class="my-0 font-weight-normal">Detalles del paciente</h4>
          </div>
          <div class="card-body">
            <h3 class="card-title pricing-card-title">{{$patient->name}} {{$patient->last_name}}</h3>
            <ul class="list-unstyled mb-4">
              <li>{{$patient->age}} años</li>
              <li>{{$patient->weight}} kg</li>
              <li><strong>Tipo de sangre: </strong>{{$patient->bloodName}}</li>
              <li><strong>Alergias:</strong> {{$patient->alergies}}</li>
              <li><strong>Enfermedades crónicas:</strong> {{$patient->chronic}}</li>
              @if($patient->donate == 1)
              <li><strong>Dona sus órganos</strong></li>
              @endif
              <li>{{$patient->email}}</li>
            </ul>
          </div>
        </div>