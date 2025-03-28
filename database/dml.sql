-- Data Manipulating Language

-- categorias
INSERT INTO categorias (nome, descricao) VALUES
('Eletrônicos', 'Dispositivos como smartphones, notebooks e tablets.'),
('Eletrodomésticos', 'Produtos para o lar como geladeiras, fogões e máquinas de lavar.'),
('Roupas e Acessórios', 'Moda masculina, feminina e infantil, incluindo calçados.'),
('Beleza e Cuidados Pessoais', 'Produtos de maquiagem, perfumes e skincare.'),
('Saúde e Bem-estar', 'Suplementos, vitaminas e produtos para cuidados pessoais.'),
('Alimentos e Bebidas', 'Itens de mercado, bebidas e produtos gourmet.'),
('Casa e Decoração', 'Móveis, iluminação e artigos de decoração.'),
('Esportes e Lazer', 'Equipamentos esportivos, roupas fitness e bicicletas.'),
('Automotivo', 'Peças, acessórios e produtos para veículos.'),
('Brinquedos e Jogos', 'Jogos de tabuleiro, brinquedos educativos e eletrônicos.'),
('Papelaria e Escritório', 'Materiais escolares, organizadores e móveis para escritório.'),
('Livros e Mídia', 'Livros físicos, e-books e materiais educativos.'),
('Música e Instrumentos Musicais', 'Instrumentos, acessórios e equipamentos de áudio.'),
('Pet Shop', 'Rações, brinquedos e acessórios para pets.'),
('Ferramentas e Construção', 'Materiais para reformas, ferramentas e equipamentos de segurança.'),
('Relógios e Óculos', 'Relógios de pulso, óculos de grau e de sol.'),
('Energia Solar e Sustentabilidade', 'Placas solares, lâmpadas LED e produtos ecológicos.'),
('Segurança e Monitoramento', 'Câmeras de segurança, alarmes e fechaduras eletrônicas.'),
('Viagem e Turismo', 'Mochilas, malas de viagem e acessórios para turismo.'),
('Serviços Digitais', 'Cursos online, assinaturas e consultorias digitais.');

-- produtos
INSERT INTO produtos (nome, descricao, id_categoria, preco, imagem) VALUES
('iPhone 15', 'Smartphone com tela OLED de 6,1 polegadas e chip A17.', (SELECT id FROM categorias WHERE nome = 'Eletrônicos'), 5999.00, 'https://imgs.pontofrio.com.br/55064619/1g.jpg?imwidth=1000'),
('Geladeira Samsung 520L', 'Geladeira de 520 litros com tecnologia de refrigeração no-frost.', (SELECT id FROM categorias WHERE nome = 'Eletrodomésticos'), 3499.00, 'https://imgs.extra.com.br/55053259/1g.jpg'),
('Tênis Nike Air Max', 'Tênis de corrida com amortecimento Air Max e design moderno.', (SELECT id FROM categorias WHERE nome = 'Roupas e Acessórios'), 499.90, 'https://imgs.extra.com.br/55053259/1g.jpg'),
('Base Líquida L’Oréal', 'Base líquida de alta cobertura com efeito matte e longa duração.', (SELECT id FROM categorias WHERE nome = 'Beleza e Cuidados Pessoais'), 89.90, 'https://imgs.extra.com.br/55053259/1g.jpg'),
('Multivitamínico One a Day', 'Suplemento diário para melhorar a saúde geral e aumentar a imunidade.', (SELECT id FROM categorias WHERE nome = 'Saúde e Bem-estar'), 69.90, 'https://imgs.extra.com.br/55053259/1g.jpg'),
('Cerveja Artesanal IPA', 'Cerveja artesanal com sabor intenso e amargor característico.', (SELECT id FROM categorias WHERE nome = 'Alimentos e Bebidas'), 19.90, 'https://imgs.extra.com.br/55053259/1g.jpg'),
('Sofá Retrátil 3 Lugares', 'Sofá retrátil e reclinável, ideal para conforto e elegância na sua sala.', (SELECT id FROM categorias WHERE nome = 'Casa e Decoração'), 1599.00, 'https://imgs.extra.com.br/55053259/1g.jpg'),
('Bicicleta MTB Aro 29', 'Bicicleta de mountain bike com suspensão dianteira e aro 29.', (SELECT id FROM categorias WHERE nome = 'Esportes e Lazer'), 1899.00, 'https://imgs.extra.com.br/55053259/1g.jpg'),
('Kit de Faróis LED para Carro', 'Kit completo de faróis LED para melhoria da visibilidade do seu veículo.', (SELECT id FROM categorias WHERE nome = 'Automotivo'), 299.00, 'https:// imgs.extra.com.br/55053259/1g.jpg'),
('Jogo de Tabuleiro Catan', 'Jogo de estratégia onde os jogadores constroem e negociam recursos.', (SELECT id FROM categorias WHERE nome = 'Brinquedos e Jogos'), 249.90, 'https://imgs.extra.com.br/55053259/1g.jpg'),
('Caderno Universitário 10 Matérias', 'Caderno espiral com 10 matérias e capa personalizada.', (SELECT id FROM categorias WHERE nome = 'Papelaria e Escritório'), 19.90, 'https://imgs.extra.com.br/55053259/1g.jpg'),
('O Senhor dos Anéis - Edição Especial', 'Edição luxuosa com capa dura e ilustrações exclusivas do clássico de J.R.R. Tolkien.', (SELECT id FROM categorias WHERE nome = 'Livros e Mídia'), 149.90, 'https://imgs.extra.com.br/55053259/1g.jpg'),
('Violão Yamaha F310', 'Violão acústico de excelente qualidade, ideal para iniciantes.', (SELECT id FROM categorias WHERE nome = 'Música e Instrumentos Musicais'), 799.00, 'https://imgs.extra.com.br/55053259/1g.jpg'),
('Ração Pedigree Sabor Frango', 'Ração seca para cães, sabor frango e com nutrientes balanceados.', (SELECT id FROM categorias WHERE nome = 'Pet Shop'), 59.90, 'https://imgs.extra.com.br/55053259/1g.jpg'),
('Furadeira Bosch 600W', 'Furadeira elétrica com 600W de potência e velocidade variável.', (SELECT id FROM categorias WHERE nome = 'Ferramentas e Construção'), 299.90, 'https://imgs.extra.com.br/55053259/1g.jpg'),
('Relógio Casio G-Shock', 'Relógio digital e resistente a impactos, ideal para aventuras.', (SELECT id FROM categorias WHERE nome = 'Relógios e Óculos'), 399.90, 'https://imgs.extra.com.br/55053259/1g.jpg'),
('Kit Solar 200W', 'Painel solar de 200W com inversor e bateria para armazenamento.', (SELECT id FROM categorias WHERE nome = 'Energia Solar e Sustentabilidade'), 2599.00, 'https://imgs.extra.com.br/55053259/1g.jpg'),
('Câmera de Segurança Arlo Pro 4', 'Câmera de segurança sem fio com alta definição e visão noturna.', (SELECT id FROM categorias WHERE nome = 'Segurança e Monitoramento'), 1299.00, 'https://imgs.extra.com.br/55053259/1g.jpg'),
('Mala de Viagem Samsonite', 'Mala resistente e leve, com compartimentos para organização.', (SELECT id FROM categorias WHERE nome = 'Viagem e Turismo'), 899.00, 'https://imgs.extra.com.br/55053259/1g.jpg'),
('Curso de Marketing Digital', 'Curso online de marketing digital com módulos sobre SEO, Ads e redes sociais.', (SELECT id FROM categorias WHERE nome = 'Serviços Digitais'), 499.00, 'https://imgs.extra.com.br/55053259/1g.jpg');
-- usuarios
INSERT INTO usuarios (nome, email, telefone, data_nascimento, cpf) VALUES
('João Silva', 'joao.silva@email.com', '(11) 99999-0001', '1990-01-15', '12345678901'),
('Maria Oliveira', 'maria.oliveira@email.com', '(11) 99999-0002', '1985-02-20', '12345678902'),
('Carlos Souza', 'carlos.souza@email.com', '(11) 99999-0003', '1992-03-25', '12345678903'),
('Ana Lima', 'ana.lima@email.com', '(11) 99999-0004', '1995-04-10', '12345678904'),
('Pedro Santos', 'pedro.santos@email.com', '(11) 99999-0005', '1988-05-30', '12345678905'),
('Juliana Costa', 'juliana.costa@email.com', '(11) 99999-0006', '1991-06-12', '12345678906'),
('Lucas Almeida', 'lucas.almeida@email.com', '(11) 99999-0007', '1994-07-05', '12345678907'),
('Fernanda Rocha', 'fernanda.rocha@email.com', '(11) 99999-0008', '1990-08-21', '12345678908'),
('Ricardo Mendes', 'ricardo.mendes@email.com', '(11) 99999-0009', '1987-09-09', '12345678909'),
('Camila Nogueira', 'camila.nogueira@email.com', '(11) 99999-0010', '1993-10-14', '12345678910'),
('Eduardo Ramos', 'eduardo.ramos@email.com', '(11) 99999-0011', '1989-11-17', '12345678911'),
('Bianca Ferreira', 'bianca.ferreira@email.com', '(11) 99999-0012', '1996-12-22', '12345678912'),
('Gustavo Teixeira', 'gustavo.teixeira@email.com', '(11) 99999-0013', '1986-01-08', '12345678913'),
('Larissa Carvalho', 'larissa.carvalho@email.com', '(11) 99999-0014', '1997-02-26', '12345678914'),
('Marcos Antunes', 'marcos.antunes@email.com', '(11) 99999-0015', '1984-04-23', '12332122223');