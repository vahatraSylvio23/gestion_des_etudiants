@extends('layouts.app')

@section('content')
<div style="background: #f8f9fa; min-height: calc(100vh - 80px); padding: 2rem;">
    <div style="max-width: 1400px; margin: 3rem auto; margin: 3rem  25rem;">
        
        <div style="display: flex; justify-content: space-between; align-items: center;  margin-bottom: 2rem; border-bottom: 1px solid #d1d1d1; padding-bottom: 2rem;" >
            <h2 style="font-size: 1.8rem; color: #333; margin: 0; display: flex; align-items: center; gap: 0.75rem; font-weight: 600;">
                <i class="fas fa-users" style="font-size: 1.6rem;"></i> 
                Liste des étudiants
            </h2>
            <a href="{{ route('students.create') }}" 
               style="padding: 0.75rem 1.5rem; 
                      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
                      color: white; 
                      border: none; 
                      border-radius: 8px; 
                      cursor: pointer; 
                      font-size: 1rem; 
                      font-weight: 500;
                      text-decoration: none; 
                      display: inline-flex; 
                      align-items: center; 
                      gap: 0.5rem; 
                      box-shadow: 0 2px 8px rgba(111, 66, 193, 0.3);
                      transition: all 0.2s;">
                <i class="fas fa-user-plus"></i> 
                Ajouter un étudiant
            </a>
        </div>

        <form method="GET" action="{{ route('students.index') }}" style="margin-bottom: 2rem;">
            <div style="display: flex; gap: 0.75rem; max-width: 400px;">
                <input type="text" 
                name="search" 
                placeholder="Rechercher..." 
                value="{{ request('search') }}" 
                style="flex: 1; 
                                  padding: 0.75rem 1rem; 
                                  border: 2px solid #e9ecef; 
                                  border-radius: 8px; 
                                  font-size: 0.95rem; 
                                  outline: none;
                                  transition: border-color 0.2s;">
                    <button type="submit" 
                            style="padding: 0.75rem 1.25rem; 
                                   background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
                                   color: white; 
                                   border: none; 
                                   border-radius: 8px; 
                                   cursor: pointer; 
                                   font-size: 0.95rem; 
                                   display: inline-flex; 
                                   align-items: center; 
                                   justify-content: center;
                                   transition: background 0.2s;">
                        <i class="fas fa-search"></i>
                    </button>
                    @if(request('search'))
                        <a href="{{ route('students.index') }}" 
                           style="padding: 0.75rem 1rem; 
                                  background: #6c757d; 
                                  color: white; 
                                  border: none; 
                                  border-radius: 8px; 
                                  cursor: pointer; 
                                  font-size: 0.95rem; 
                                  text-decoration: none; 
                                  display: inline-flex; 
                                  align-items: center;
                                  transition: background 0.2s;">
                            <i class="fas fa-times"></i>
                        </a>
                    @endif
                </div>
            </form>

            <div style="background: white; 
                        border-radius: 12px; 
                        box-shadow: 0 2px 12px rgba(0,0,0,0.08); 
                        padding: 2rem; 
                        margin-bottom: 1rem;">
                
            @if($students->isEmpty())
                <div style="text-align: center; color: #666; padding: 4rem; margin: 0;">
                    <i class="fas fa-user-slash" style="font-size: 3rem; display: block; margin-bottom: 1rem; color: #dee2e6;"></i>
                    <p style="margin: 0; font-size: 1.1rem; color: #6c757d;">Aucun étudiant trouvé</p>
                </div>
            @else
                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr style="border-bottom: 2px solid #e9ecef;">
                                <th style="padding: 1rem; 
                                           text-align: left; 
                                           background: #f8f9fa; 
                                           font-weight: 600; 
                                           color: #495057; 
                                           font-size: 0.9rem;
                                           border-bottom: 2px solid #dee2e6;">
                                    ID
                                </th>
                                <th style="padding: 1rem; 
                                           text-align: left; 
                                           background: #f8f9fa; 
                                           font-weight: 600; 
                                           color: #495057; 
                                           font-size: 0.9rem;
                                           border-bottom: 2px solid #dee2e6;">
                                    Prénom
                                </th>
                                <th style="padding: 1rem; 
                                           text-align: left; 
                                           background: #f8f9fa; 
                                           font-weight: 600; 
                                           color: #495057; 
                                           font-size: 0.9rem;
                                           border-bottom: 2px solid #dee2e6;">
                                    Nom
                                </th>
                                <th style="padding: 1rem; 
                                           text-align: left; 
                                           background: #f8f9fa; 
                                           font-weight: 600; 
                                           color: #495057; 
                                           font-size: 0.9rem;
                                           border-bottom: 2px solid #dee2e6;">
                                    Email
                                </th>
                                <th style="padding: 1rem; 
                                           text-align: left; 
                                           background: #f8f9fa; 
                                           font-weight: 600; 
                                           color: #495057; 
                                           font-size: 0.9rem;
                                           border-bottom: 2px solid #dee2e6;">
                                    Téléphone
                                </th>
                                <th style="padding: 1rem; 
                                           text-align: left; 
                                           background: #f8f9fa; 
                                           font-weight: 600; 
                                           color: #495057; 
                                           font-size: 0.9rem;
                                           border-bottom: 2px solid #dee2e6;">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                                <tr style="transition: background 0.2s; border-bottom: 1px solid #f1f3f5;"
                                    onmouseover="this.style.background='#f8f9fa'" 
                                    onmouseout="this.style.background='white'">
                                    <td style="padding: 1rem; 
                                               text-align: left; 
                                               color: #6c757d;
                                               font-size: 0.95rem;">
                                        {{ $student->id }}
                                    </td>
                                    <td style="padding: 1rem; 
                                               text-align: left; 
                                               color: #212529;
                                               font-size: 0.95rem;
                                               font-weight: 500;">
                                        {{ $student->first_name }}
                                    </td>
                                    <td style="padding: 1rem; 
                                               text-align: left; 
                                               color: #212529;
                                               font-size: 0.95rem;
                                               font-weight: 500;">
                                        {{ $student->last_name }}
                                    </td>
                                    <td style="padding: 1rem; 
                                               text-align: left; 
                                               color: #6c757d;
                                               font-size: 0.95rem;">
                                        {{ $student->email }}
                                    </td>
                                    <td style="padding: 1rem; 
                                               text-align: left; 
                                               color: #6c757d;
                                               font-size: 0.95rem;">
                                        {{ $student->phone ?? '-' }}
                                    </td>
                                    <td style="padding: 1rem; text-align: left;">
                                        <div style="display: flex; gap: 1rem; align-items: center;">
                                            <a href="{{ route('students.edit', $student) }}" 
                                               title="Modifier" 
                                               style="color: #6f42c1; 
                                                      text-decoration: none; 
                                                      font-size: 1.1rem;
                                                      transition: color 0.2s;">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('students.destroy', $student) }}" 
                                                  method="POST" 
                                                  style="display: inline; margin: 0;" 
                                                  onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        title="Supprimer" 
                                                        style="background: none; 
                                                               border: none; 
                                                               color: #dc3545; 
                                                               cursor: pointer; 
                                                               font-size: 1.1rem; 
                                                               padding: 0;
                                                               transition: color 0.2s;">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @if($students->hasPages())
                    <div style="display: flex; justify-content: center; margin-top: 2rem;">
                        {{ $students->appends(['search' => request('search')])->links() }}
                    </div>
                @endif
            @endif
        </div>
        
    </div>
</div>

<style>
    /* Hover effects */
    input[type="text"]:focus {
        border-color: #6f42c1 !important;
    }
    
    button[type="submit"]:hover {
        background: #5a32a3 !important;
    }
    
    a[href*="students.create"]:hover {
        background: #5a32a3 !important;
        transform: translateY(-1px);
    }
    
    .fas.fa-edit:hover {
        color: #5a32a3 !important;
    }
    
    .fas.fa-trash:hover {
        color: #bb2d3b !important;
    }
</style>
@endsection