package com.repository;

import com.domain.Blog;
import com.domain.TaxUser;
import com.domain.taxLiability;

import java.util.List;

public interface BlogRepo {

    public List<Blog> getAll();

    public Blog create(Blog blog);

    public Blog get(int id);

    public Blog update(Blog blog);

    public void delete(int id);
}
