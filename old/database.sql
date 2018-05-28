create table users (
  id bigserial primary key,
  login varchar not null,
  password varchar not null,
  type varchar not null,
  
);
