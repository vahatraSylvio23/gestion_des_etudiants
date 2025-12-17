@extends('layouts.app')

@section('content')
<div style="background: #f5f5f5; min-height: calc(100vh - 80px); padding: 2rem;">
    <div style="max-width: 1200px; margin: 0 auto;">
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
            <h1 style="font-size: 1.5rem; color: #333; margin: 0; display: flex; align-items: center; gap: 0.5rem;">
                <i class="fas fa-user-edit"></i> {{ __('messages.edit_student') }}
            </h1>
            <a href="{{ route('students.index') }}" style="padding: 0.5rem 1rem; background: #6c757d; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;">
                <i class="fas fa-arrow-left"></i> {{ __('messages.back') }}
            </a>
        </div>

        <div style="background: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); padding: 3rem; margin-bottom: 1rem;">
            
            <form method="POST" action="{{ route('students.update', $student) }}">
                @csrf
                @method('PUT')
                
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem; margin-bottom: 1.5rem;">
                    
                    <div style="margin-bottom: 0;">
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #333;">{{ __('messages.first_name') }} *</label>
                        <input type="text" name="first_name" value="{{ old('first_name', $student->first_name) }}" required style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box;">
                        @error('first_name')
                            <div style="color: #dc3545; font-size: 0.85rem; margin-top: 0.25rem;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="margin-bottom: 0;">
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #333;">{{ __('messages.last_name') }} *</label>
                        <input type="text" name="last_name" value="{{ old('last_name', $student->last_name) }}" required style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box;">
                        @error('last_name')
                            <div style="color: #dc3545; font-size: 0.85rem; margin-top: 0.25rem;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="margin-bottom: 0;">
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #333;">{{ __('messages.email') }} *</label>
                        <input type="email" name="email" value="{{ old('email', $student->email) }}" required style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box;">
                        @error('email')
                            <div style="color: #dc3545; font-size: 0.85rem; margin-top: 0.25rem;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div style="margin-bottom: 0;">
                        <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #333;">{{ __('messages.phone') }}</label>
                        <input type="text" name="phone" value="{{ old('phone', $student->phone) }}" style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box;">
                        @error('phone')
                            <div style="color: #dc3545; font-size: 0.85rem; margin-top: 0.25rem;">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #333;">{{ __('messages.birth_date') }}</label>
                    <input type="date" name="birth_date" value="{{ old('birth_date', $student->birth_date?->format('Y-m-d')) }}" style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box;">
                    @error('birth_date')
                        <div style="color: #dc3545; font-size: 0.85rem; margin-top: 0.25rem;">{{ $message }}</div>
                    @enderror
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: #333;">{{ __('messages.address') }}</label>
                    <textarea name="address" rows="3" style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box; resize: vertical;">{{ old('address', $student->address) }}</textarea>
                    @error('address')
                        <div style="color: #dc3545; font-size: 0.85rem; margin-top: 0.25rem;">{{ $message }}</div>
                    @enderror
                </div>

                <div style="display: flex; gap: 1rem; margin-top: 1.5rem;">
                    <button type="submit" style="padding: 0.5rem 1rem; background: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 0.9rem; display: inline-flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-save"></i> {{ __('messages.save') }}
                    </button>
                    <a href="{{ route('students.index') }}" style="padding: 0.5rem 1rem; background: #6c757d; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-times"></i> {{ __('messages.cancel') }}
                    </a>
                </div>
            </form>
            
        </div>
        
    </div>
</div>
@endsection