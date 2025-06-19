import React, { useState } from 'react';
import { 
  Input, 
  TextArea, 
  Select, 
  Checkbox, 
  Radio, 
  Button, 
  FormGroup 
} from './index';

const FormExample = () => {
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    message: '',
    country: '',
    subscribe: false,
    gender: '',
  });

  const [errors, setErrors] = useState({});

  const handleChange = (e) => {
    const { name, value, type, checked } = e.target;
    setFormData({
      ...formData,
      [name]: type === 'checkbox' ? checked : value,
    });
    
    // Clear error when field is changed
    if (errors[name]) {
      setErrors({
        ...errors,
        [name]: '',
      });
    }
  };

  const validateForm = () => {
    const newErrors = {};
    
    if (!formData.name.trim()) {
      newErrors.name = 'Nome é obrigatório';
    }
    
    if (!formData.email.trim()) {
      newErrors.email = 'Email é obrigatório';
    } else if (!/\S+@\S+\.\S+/.test(formData.email)) {
      newErrors.email = 'Email inválido';
    }
    
    if (!formData.country) {
      newErrors.country = 'Selecione um país';
    }
    
    if (!formData.gender) {
      newErrors.gender = 'Selecione um gênero';
    }
    
    setErrors(newErrors);
    return Object.keys(newErrors).length === 0;
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    
    if (validateForm()) {
      // Aqui você enviaria os dados para o servidor
      console.log('Dados do formulário:', formData);
      alert('Formulário enviado com sucesso!');
    }
  };

  const countries = [
    { value: 'br', label: 'Brasil' },
    { value: 'us', label: 'Estados Unidos' },
    { value: 'ca', label: 'Canadá' },
    { value: 'pt', label: 'Portugal' },
  ];

  return (
    <div className="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md">
      <h2 className="text-2xl font-bold text-gray-800 mb-6">Exemplo de Formulário</h2>
      
      <form onSubmit={handleSubmit}>
        <FormGroup title="Informações Pessoais" description="Preencha seus dados pessoais abaixo.">
          <Input
            label="Nome"
            name="name"
            id="name"
            placeholder="Digite seu nome"
            value={formData.name}
            onChange={handleChange}
            required
            error={errors.name}
          />
          
          <Input
            type="email"
            label="Email"
            name="email"
            id="email"
            placeholder="Digite seu email"
            value={formData.email}
            onChange={handleChange}
            required
            error={errors.email}
          />
          
          <Select
            label="País"
            name="country"
            id="country"
            options={countries}
            value={formData.country}
            onChange={handleChange}
            placeholder="Selecione seu país"
            required
            error={errors.country}
          />
          
          <div className="mb-4">
            <label className="block text-sm font-medium text-gray-700 mb-1">
              Gênero
              {errors.gender && <span className="text-red-500 ml-1">*</span>}
            </label>
            
            <div className="space-y-2">
              <Radio
                label="Masculino"
                name="gender"
                id="gender-male"
                value="male"
                checkedValue={formData.gender}
                onChange={handleChange}
              />
              
              <Radio
                label="Feminino"
                name="gender"
                id="gender-female"
                value="female"
                checkedValue={formData.gender}
                onChange={handleChange}
              />
              
              <Radio
                label="Outro"
                name="gender"
                id="gender-other"
                value="other"
                checkedValue={formData.gender}
                onChange={handleChange}
              />
            </div>
            
            {errors.gender && <p className="mt-1 text-sm text-red-500">{errors.gender}</p>}
          </div>
        </FormGroup>
        
        <FormGroup title="Mensagem" description="Deixe sua mensagem e preferências.">
          <TextArea
            label="Mensagem"
            name="message"
            id="message"
            placeholder="Digite sua mensagem"
            value={formData.message}
            onChange={handleChange}
            rows={5}
          />
          
          <Checkbox
            label="Desejo receber novidades por email"
            name="subscribe"
            id="subscribe"
            checked={formData.subscribe}
            onChange={handleChange}
          />
        </FormGroup>
        
        <div className="flex justify-end space-x-4 mt-8">
          <Button variant="outline" onClick={() => setFormData({
            name: '',
            email: '',
            message: '',
            country: '',
            subscribe: false,
            gender: '',
          })}>
            Limpar
          </Button>
          
          <Button type="submit" variant="primary">
            Enviar
          </Button>
        </div>
      </form>
    </div>
  );
};

export default FormExample;